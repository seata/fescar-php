<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
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
namespace Hyperf\Seata\Tm\Api;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Common\DefaultValues;
use Hyperf\Seata\Core\Context\RootContext;
use Hyperf\Seata\Core\Model\GlobalStatus;
use Hyperf\Seata\Core\Model\TransactionManager;
use Hyperf\Seata\Exception\IllegalStateException;
use Hyperf\Seata\Exception\TransactionException;
use Hyperf\Seata\Tm\TransactionManagerHolder;
use Hyperf\Utils\ApplicationContext;
use Throwable;

class DefaultGlobalTransaction implements GlobalTransaction
{
    private const DEFAULT_GLOBAL_TX_TIMEOUT = 60000;

    private const DEFAULT_GLOBAL_TX_NAME = 'default';

    /**
     * @var StdoutLoggerInterface
     */
    private $logger;

    /**
     * @var ConfigInterface
     */
    private $config;

    /**
     * @var TransactionManager
     */
    private $transactionManager;

    /**
     * @var string
     */
    private $xid;

    /**
     * @var GlobalStatus
     */
    private $status;

    /**
     * @var GlobalTransactionRole
     */
    private $role;

    private $commitRetryCount;

    private $rollbackRetryCount;

    public function __construct(?string $xid = null, GlobalStatus $status, GlobalTransactionRole $role)
    {
        $container = ApplicationContext::getContainer();
        $this->logger = $container->get(StdoutLoggerInterface::class);
        $this->config = $container->get(ConfigInterface::class);
        $this->commitRetryCount = $this->config->get('stata.commit_retry_count', DefaultValues::DEFAULT_TM_COMMIT_RETRY_COUNT);
        $this->rollbackRetryCount = $this->config->get('stata.rollback_retry_count', DefaultValues::DEFAULT_TM_ROLLBACK_RETRY_COUNT);
        $this->transactionManager = TransactionManagerHolder::get();
        $this->xid = $xid;
        $this->status = $status;
        $this->role = $role;
    }

    public function begin(?int $timeout = null, ?string $name = null)
    {
        if (empty($timeout)) {
            $timeout = self::DEFAULT_GLOBAL_TX_TIMEOUT;
        }

        if (empty($name)) {
            $name = self::DEFAULT_GLOBAL_TX_NAME;
        }

        if ($this->role->getRole() === GlobalTransactionRole::Launcher) {
            $this->assertXIDNotNull();
            $this->logger->debug(sprintf('Ignore Begin(): just involved in global Transaction [%s]', $this->xid));
            return;
        }

        $this->assertXIDNull();
        $currentXid = RootContext::getXID();
        if ($currentXid != null) {
            throw new IllegalStateException('Global Transaction already exists,' .
                " can't begin a new global Transaction, currentXid = " . $currentXid);
        }
        $xid = $this->transactionManager->begin(null, null, $name, $timeout);
        $this->status = new GlobalStatus(GlobalStatus::Begin);
        RootContext::bind($xid);
        $this->logger->info(sprintf('Begin new global Transaction [%s]', $xid));
    }

    public function commit()
    {
        if ($this->role->getRole() == GlobalTransactionRole::Participant) {
            // Participant has no responsibility of committing
            $this->logger->debug(sprintf('Ignore Commit(): just involved in global Transaction [%s]', $this->xid));
            return;
        }

        $this->assertXIDNotNull();
        $retry = $this->commitRetryCount <= 0 ? DefaultValues::DEFAULT_TM_COMMIT_RETRY_COUNT : $this->commitRetryCount;

        try {
            while ($retry > 0) {
                try {
                    $status = $this->transactionManager->commit($this->xid);
                    break;
                } catch (Throwable $throwable) {
                    $this->logger->error(sprintf('Failed to report global commit [%s],Retry Countdown: %s, reason: %s', $this->xid, $retry, $throwable->getMessage()));
                    --$retry;
                    if ($retry == 0) {
                        throw new TransactionException('Failed to report global commit', 0, $throwable);
                    }
                }
            }
        } finally {
            if ($this->xid == RootContext::getXID()) {
                $this->suspend();
            }
        }
        $this->logger->info(sprintf('[%s] commit status: %s', $this->xid, $status));
    }

    public function rollback()
    {
        if ($this->role->getRole() == GlobalTransactionRole::Participant) {
            // Participant has no responsibility of rollback
            $this->logger->debug(sprintf('Ignore Rollback(): just involved in global Transaction [%s]', $this->xid));
            return;
        }

        $this->assertXIDNotNull();

        $retry = $this->rollbackRetryCount <= 0 ? DefaultValues::DEFAULT_TM_ROLLBACK_RETRY_COUNT : $this->rollbackRetryCount;
        try {
            while ($retry > 0) {
                try {
                    $status = $this->transactionManager->getStatus($this->xid);
                    break;
                } catch (Throwable $throwable) {
                    $this->logger->error(sprintf('Failed to report global rollback [%s],Retry Countdown: %s, reason: %s', $this->xid, $retry, $throwable->getMessage()));
                    --$retry;
                    if ($retry == 0) {
                        throw new TransactionException('Failed to report global rollback', 0, $throwable);
                    }
                }
            }
        } finally {
            if ($this->xid == RootContext::getXID()) {
                $this->suspend();
            }
        }
        $this->logger->info(sprintf('[%s] rollback status: %s', $this->xid, $status->getStatus()));
    }

    public function suspend(): ?SuspendedResourcesHolder
    {
        $xid = RootContext::getXID();
        if (! empty($xid)) {
            $this->logger->info(sprintf('Suspending current Transaction, xid = %s', $xid));
            RootContext::unbind();
            return new SuspendedResourcesHolder($xid);
        }
        return null;
    }

    public function resume(?SuspendedResourcesHolder $suspendedResourcesHolder = null)
    {
        if (empty($suspendedResourcesHolder)) {
            return null;
        }

        $xid = $suspendedResourcesHolder->getXid();
        RootContext::bind($xid);
        $this->logger->debug(sprintf('Resumimg the Transaction,xid = %s', $xid));
    }

    public function getStatus(): GlobalStatus
    {
        if (empty($this->xid)) {
            return new GlobalStatus(GlobalStatus::UnKnown);
        }
        return $this->transactionManager->getStatus($this->xid);
    }

    public function getXid(): ?string
    {
        return $this->xid;
    }

    public function globalReport(?GlobalStatus $globalStatus)
    {
        $this->assertXIDNotNull();

        if (empty($globalStatus)) {
            throw new IllegalStateException();
        }

        $status = $this->transactionManager->globalReport($this->xid, $globalStatus);
        $this->logger->info(sprintf('[%s] report status: %s', $this->xid, $status->getStatus()));

        if ($this->xid == RootContext::getXID()) {
            $this->suspend();
        }
    }

    public function getLocalStatus(): ?GlobalStatus
    {
        return $this->status;
    }

    public function getGlobalTransactionRole(): ?GlobalTransactionRole
    {
        return $this->role;
    }

    private function assertXIDNotNull()
    {
        if ($this->xid == null) {
            throw new IllegalStateException();
        }
    }

    private function assertXIDNull()
    {
        if ($this->xid != null) {
            throw new IllegalStateException();
        }
    }
}
