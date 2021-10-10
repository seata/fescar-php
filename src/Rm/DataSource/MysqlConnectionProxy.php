<?php

namespace Hyperf\Seata\Rm\DataSource;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Database\MySqlConnection;
use Hyperf\Seata\Core\Model\BranchStatus;
use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Model\Resource;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Exception\LockConflictException;
use Hyperf\Seata\Exception\RuntimeException;
use Hyperf\Seata\Exception\TransactionException;
use Hyperf\Seata\Exception\TransactionExceptionCode;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Seata\Rm\DataSource\Undo\SQLUndoLog;
use Hyperf\Seata\Rm\DataSource\Undo\UndoLogManager;
use Hyperf\Seata\Rm\DataSource\Undo\UndoLogManagerFactory;
use Hyperf\Seata\Rm\DefaultResourceManager;
use Hyperf\Utils\ApplicationContext;
use JetBrains\PhpStorm\Pure;

// todo
class MysqlConnectionProxy extends MySqlConnection implements Resource, ConnectionProxyInterface
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

    public function __construct($pdo, $database = '', $tablePrefix = '', array $config = [])
    {
        parent::__construct($pdo, $database, $tablePrefix, $config);
        $this->resourceGroupId = self::DEFAULT_RESOURCE_GROUP_ID;
        $this->resourceId = $this->generateResourceId($config);
        $this->context = new ConnectionContext();
        $contaienr = ApplicationContext::getContainer();
        $contaienr->get(ResourceManagerInterface::class)->registerResource($this);
        $this->logger = $contaienr->get(LoggerFactory::class)->create(static::class);
        $this->defaultResourceManager = $contaienr->get(DefaultResourceManager::class);
        $this->undoLogManager = $contaienr->get(UndoLogManagerFactory::class)->getUndoLogManager('mysql');
        $config = $contaienr->get(ConfigInterface::class);
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

    public function setResourceGroupId(string $resourceGroupId): static
    {
        $this->resourceGroupId = $resourceGroupId;
        return $this;
    }

    protected function generateResourceId(array $config): string
    {
        $driver = 'pdo';
        $engine = $config['driver'] ?? 'mysql';
        $host = $config['host'] ?? null;
        $port = (int)($config['port'] ?? 3306);
        $database = $config['database'] ?? null;
        $resourceId = sprintf('%s:%s://%s:%d/%s', $driver, $engine, $host, $port, $database);
        return $resourceId;
    }

    public function getContext(): ConnectionContext
    {
        return $this->context;
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
            $message = sprintf('Get global lock fail, xid: ', $this->context->getXid());
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


}