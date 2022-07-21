<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Rm\DataSource;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Database\Connection;
use Hyperf\Database\DBAL\MySqlDriver;
use Hyperf\Database\Query\Grammars\MySqlGrammar as QueryGrammar;
use Hyperf\Database\Query\Processors\MySqlProcessor;
use Hyperf\Database\Schema\Grammars\MySqlGrammar as SchemaGrammar;
use Hyperf\Database\Schema\MySqlBuilder;
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
class MysqlConnectionProxy extends Connection implements Resource, ConnectionProxyInterface
{
    private const DEFAULT_RESOURCE_GROUP_ID = 'DEFAULT';

    public bool $reportSuccessEnable;

    protected string $resourceId = '';

    protected string $resourceGroupId = '';

    protected LoggerInterface $logger;

    protected ConnectionContext $context;

    protected DefaultResourceManager $defaultResourceManager;

    protected UndoLogManager $undoLogManager;

    protected int $reportRetryCount;

    public function __construct($pdo, $database = '', $tablePrefix = '', array $config = [])
    {
        parent::__construct($pdo, $database, $tablePrefix, $config);
        $this->resourceGroupId = self::DEFAULT_RESOURCE_GROUP_ID;
        $this->resourceId = $this->generateResourceId($config);
        $this->context = new ConnectionContext();
        $container = ApplicationContext::getContainer();
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

    public function setResourceGroupId(string $resourceGroupId): static
    {
        $this->resourceGroupId = $resourceGroupId;
        return $this;
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

    public function rollBack($toLevel = null): void
    {
        parent::rollBack($toLevel);
        if ($this->context->inGlobalTransaction() && $this->context->isBranchRegistered()) {
            $this->report(false);
        }
        $this->context->reset();
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

    protected function generateResourceId(array $config): string
    {
        $driver = 'pdo';
        $engine = $config['driver'] ?? 'mysql';
        $host = $config['host'] ?? null;
        $port = (int) ($config['port'] ?? 3306);
        $database = $config['database'] ?? null;
        return sprintf('%s:%s://%s:%d/%s', $driver, $engine, $host, $port, $database);
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
