<?php

namespace Hyperf\Seata\Rm;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Context\RootContext;
use Hyperf\Seata\Core\Model\BranchStatus;
use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Model\Resource;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Exception\LockConflictException;
use Hyperf\Seata\Exception\TransactionException;
use Hyperf\Seata\Exception\TransactionExceptionCode;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Seata\Rm\DataSource\ConnectionContext;
use Hyperf\Seata\Rm\DataSource\ConnectionProxyInterface;
use Hyperf\Seata\Rm\DataSource\Exec\DeleteExecutor;
use Hyperf\Seata\Rm\DataSource\Sql\SQLVisitorFactory;
use Hyperf\Seata\Rm\DataSource\Undo\SQLUndoLog;
use Hyperf\Seata\Rm\DataSource\Undo\UndoLogManager;
use Hyperf\Seata\Rm\DataSource\Undo\UndoLogManagerFactory;
use Hyperf\Seata\SqlParser\SqlParserFactory;
use Hyperf\Utils\ApplicationContext;
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Pure;
use PHPSQLParser\PHPSQLParser;
use RuntimeException;

class PDOProxy extends \PDO implements Resource,ConnectionProxyInterface
{
    protected string $resourceId = '';
    protected string $resourceGroupId = '';
    private const DEFAULT_RESOURCE_GROUP_ID = 'DEFAULT';
    protected LoggerInterface $logger;
    protected ConnectionContext $context;
    protected DefaultResourceManager $defaultResourceManager;
    protected UndoLogManager $undoLogManager;
    public bool $reportSuccessEnable;
    protected int $reportRetryCount;

    public function __construct($dsn, $username = null, $password = null, $options = null)
    {
        parent::__construct($dsn, $username, $password, $options);
        $this->resourceGroupId = self::DEFAULT_RESOURCE_GROUP_ID;
        $this->resourceId = $dsn;
        $container = ApplicationContext::getContainer();
        $this->context = $container->get(ConnectionContext::class);
        $container->get(ResourceManagerInterface::class)->registerResource($this);
        $this->logger = $container->get(LoggerFactory::class)->create(static::class);
        $this->defaultResourceManager = $container->get(DefaultResourceManager::class);
        $this->undoLogManager = $container->get(UndoLogManagerFactory::class)->getUndoLogManager('mysql');
        $config = $container->get(ConfigInterface::class);
        $this->reportSuccessEnable = $config->get('seata.client.rm.report_success_enable', false);
        $this->reportRetryCount = $config->get('seata.client.rm.report_retry_count', 5);
    }

    public function getResourceGroupId(): string
    {
        return $this->resourceGroupId;
    }

    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    public function getBranchType(): int
    {
        return BranchType::AT;
    }

    public function bind(string $xid): void
    {
        $this->context->bind($xid);
    }

    public function setGlobalLockRequire(bool $lock): static
    {
        $this->context->setGlobalLockRequire($lock);
        return $this;
    }

    #[Pure]
    public function isGlobalLockRequire(): bool
    {
        return $this->context->isGlobalLockRequire();
    }

    public function checkLock(string $lockKeys): void
    {
        if (! empty($lockKeys)) {
            try {
                $lockable = $this->defaultResourceManager->lockQuery(BranchType::AT, $this->getResourceId(), $this->context->getXid(), $lockKeys);
                if (! $lockable) {
                    throw new LockConflictException();
                }
            } catch (TransactionException $exception) {
                $this->recognizeLockKeyConflictException($exception, $lockKeys);
            }
        }
    }

    public function lockQuery(string $lockKeys): bool
    {
        $lockable = false;
        try {
            $lockable = $this->defaultResourceManager->lockQuery(BranchType::AT, $this->getResourceId(), $this->context->getXid(), $lockKeys);
            if (! $lockable) {
                throw new LockConflictException();
            }
        } catch (TransactionException $exception) {
            $this->recognizeLockKeyConflictException($exception, $lockKeys);
        }
        return $lockable;
    }

    /**
     * @throws LockConflictException|\RuntimeException
     */
    private function recognizeLockKeyConflictException(TransactionException $exception, string $lockKeys = null): void
    {
        if ($exception->getCode() === TransactionExceptionCode::LockKeyConflict) {
            $message = sprintf('Get global lock fail, xid: %s', $this->context->getXid());
            if ($lockKeys) {
                $message .= sprintf(', lockKeys: %s', $lockKeys);
            }

            throw new LockConflictException($message);
        } else {
            throw new \RuntimeException($exception);
        }
    }

    public function appendUndoLog(SQLUndoLog $sqlUndoLog)
    {
        $this->context->appendUndoItem($sqlUndoLog);
    }

    public function appendLockKey(string $lockKey)
    {
        $this->context->appendLockKey($lockKey);
    }

    public function commit(): void
    {
        var_dump('-----commit');
        if ($this->context->inGlobalTransaction()) {
            $this->processGlobalTransactionCommit();
        } elseif ($this->context->isGlobalLockRequire()) {
            $this->processLocalCommitWithGlobalLocks();
        } else {
            parent::commit();
        }
    }

    /**
     * @throws \Throwable
     */
    protected function processGlobalTransactionCommit()
    {
        try {
            $this->register();
        } catch (\Throwable $exception) {
            $this->recognizeLockKeyConflictException($exception, $this->context->buildLockKeys());
        }
        try {
            $this->undoLogManager->flushUndoLogs($this);
        } catch (\Throwable $exception) {
            $this->logger->error(sprintf('Process connection proxy commit error: %s', $exception->getMessage()));
            $this->report(false);
            throw $exception;
        }

        if ($this->reportSuccessEnable) {
            $this->report(true);
        }
        $this->context->reset();
    }

    protected function processLocalCommitWithGlobalLocks()
    {
        $this->checkLock($this->context->buildLockKeys());

        parent::commit();

        $this->context->reset();
    }

    protected function register(): void
    {
        if ($this->context->hasUndoLog() && $this->context->hasLockKey()) {
            $branchId = $this->defaultResourceManager->branchRegister(BranchType::AT, $this->getResourceId(), '', $this->context->getXid(), '', $this->context->buildLockKeys());
            $this->context->setBranchId($branchId);
        }
    }

    public function rollBack($toLevel = null): void
    {
        var_dump('------rollback');
        parent::rollBack($toLevel);
        if ($this->context->inGlobalTransaction() && $this->context->isBranchRegistered()) {
            $this->report(false);
        }
        $this->context->reset();
    }

    private function report(bool $commitDone): void
    {
        if ($this->context->isBranchRegistered()) {
            $retry = $this->reportRetryCount;
            while ($retry > 0) {
                try {
                    $this->defaultResourceManager->branchReport(BranchType::AT, $this->context->getXid(), $this->context->getBranchId(), $commitDone ? BranchStatus::PhaseOne_Done : BranchStatus::PhaseOne_Failed, '');
                    return;
                } catch (\Throwable $exception) {
                    $this->logger->error(sprintf('Failed to report [%d/%s] commit donw [%s] Retry Countdwon: %d', $this->context->getBranchId(), $this->context->getXid(), $commitDone ? 'true' : 'false', $retry));
                    --$retry;
                    if ($retry === 0) {
                        throw new RuntimeException(sprintf('Failed to report branch status %s', $commitDone ? 'true' : 'fasle'), 0, $exception);
                    }
                }
            }
        }
    }

    /**
     * Get a schema builder instance for the connection.
     */
    public function getSchemaBuilder(): MySqlBuilder
    {
        if (is_null($this->schemaGrammar)) {
            $this->useDefaultSchemaGrammar();
        }

        return new MySqlBuilder($this);
    }

    /**
     * Bind values to their parameters in the given statement.
     */
    public function bindValues(\PDOStatement $statement, array $bindings): void
    {
        foreach ($bindings as $key => $value) {
            $statement->bindValue(
                is_string($key) ? $key : $key + 1,
                $value
            );
        }
    }

    /**
     * Get the default query grammar instance.
     *
     * @return \Hyperf\Database\Query\Grammars\MySqlGrammar
     */
    protected function getDefaultQueryGrammar()
    {
        return $this->withTablePrefix(new QueryGrammar());
    }

    /**
     * Get the default schema grammar instance.
     *
     * @return \Hyperf\Database\Schema\Grammars\MySqlGrammar
     */
    protected function getDefaultSchemaGrammar()
    {
        return $this->withTablePrefix(new SchemaGrammar());
    }

    /**
     * Get the default post processor instance.
     *
     * @return \Hyperf\Database\Query\Processors\MySqlProcessor
     */
    protected function getDefaultPostProcessor()
    {
        return new MySqlProcessor();
    }

    /**
     * Get the Doctrine DBAL driver.
     *
     * @return \Doctrine\DBAL\Driver\PDO\MySQL\Driver
     */
    protected function getDoctrineDriver()
    {
        return new MySqlDriver();
    }

    public function getContext(): ConnectionContext
    {
        return $this->context;
    }

    /**
     * paser sql
     */
    public function prepare($query, array $options = [])
    {
        $sqlParser = SqlParserFactory::parser($query);
        $sqlParser->setResourceId($this->getResourceId());
        $prepare = parent::prepare($query, $options);
        return new PDOStatementProxy($prepare, $this, $sqlParser);
    }

    public function parentPrepare($query, $options): bool|\PDOStatement
    {
        return parent::prepare($query, $options);
    }


}