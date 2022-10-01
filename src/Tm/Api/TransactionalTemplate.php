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

use Exception;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Context\GlobalLockConfigHolder;
use Hyperf\Seata\Core\Model\GlobalLockConfig;
use Hyperf\Seata\Core\Model\GlobalStatus;
use Hyperf\Seata\Exception\ExecutionException;
use Hyperf\Seata\Exception\ShouldNeverHappenException;
use Hyperf\Seata\Exception\TransactionException;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Tm\Api\Transaction\Propagation;
use Hyperf\Seata\Tm\Api\Transaction\TransactionHook;
use Hyperf\Seata\Tm\Api\Transaction\TransactionHookManager;
use Hyperf\Seata\Tm\Api\Transaction\TransactionInfo;
use Psr\Log\LoggerInterface;
use Throwable;

class TransactionalTemplate
{
    private LoggerInterface $logger;

    public function __construct(LoggerFactory $loggerFactory)
    {
        $this->logger = $loggerFactory->create(static::class);
    }

    public function execute(TransactionalExecutor $business)
    {
        // 1. Get transactionInfo
        $txInfo = $business->getTransactionInfo();
        if (empty($txInfo)) {
            throw new ShouldNeverHappenException('transactionInfo does not exist');
        }

        // 1.1 Get current transaction, if not null, the tx role is 'GlobalTransactionRole.Participant'.
        $tx = GlobalTransactionContext::getCurrent();
        // 1.2 Handle the transaction propagation.
        $propagation = $txInfo->getPropagation();
        $suspendedResourcesHolder = null;
        try {
            switch ($propagation->getPropagation()) {
                case Propagation::NOT_SUPPORTED:
                    // If transaction is existing, suspend it.
                    if ($this->existingTransaction($tx)) {
                        $suspendedResourcesHolder = $tx->suspend();
                    }
                    // Execute without transaction and return.
                    return $business->execute();
                case Propagation::REQUIRES_NEW:
                    // If transaction is existing, suspend it, and then begin new transaction.
                    if ($this->existingTransaction($tx)) {
                        $suspendedResourcesHolder = $tx->suspend();
                        $tx = GlobalTransactionContext::createNew();
                    }
                    // Continue and execute with new transaction
                    break;
                case Propagation::SUPPORTS:
                    // If transaction is not existing, execute without transaction.
                    if ($this->notExistingTransaction($tx)) {
                        return $business->execute();
                    }
                    // Continue and execute with new transaction
                    break;
                case Propagation::REQUIRED:
                    // If current transaction is existing, execute with current transaction,
                    // else continue and execute with new transaction.
                    break;
                case Propagation::NEVER:
                    // If transaction is existing, throw exception.
                    if ($this->existingTransaction($tx)) {
                        throw new TransactionException(sprintf("Existing transaction found for transaction marked with propagation 'never', xid = %s", $tx->getXid()));
                    }
                    // Execute without transaction and return.
                    return $business->execute();
                case Propagation::MANDATORY:
                    // If transaction is not existing, throw exception.
                    if ($this->notExistingTransaction($tx)) {
                        throw new TransactionException("No existing transaction found for transaction marked with propagation 'mandatory'");
                    }
                    // Continue and execute with current transaction.
                    break;
                default:
                    throw new TransactionException('Not Supported Propagation:' . $propagation->getPropagation());
            }

            // 1.3 If null, create new transaction with role 'GlobalTransactionRole.Launcher'.
            if ($tx == null) {
                $tx = GlobalTransactionContext::createNew();
            }

            // set current tx config to holder
            /** @var GlobalLockConfig $previousConfig */
            $previousConfig = $this->replaceGlobalLockConfig($txInfo);
            try {
                // 2. If the tx role is 'GlobalTransactionRole.Launcher', send the request of beginTransaction to TC,
                //    else do nothing. Of course, the hooks will still be triggered.
                $this->beginTransaction($txInfo, $tx);
                $rs = null;
                try {
                    // Do Your Business
                    $rs = $business->execute();
                } catch (Throwable $throwable) {
                    // 3. The needed business exception to rollback.
                    var_dump($throwable->getMessage());
                    var_dump($throwable->getTraceAsString());
                    $this->completeTransactionAfterThrowing($txInfo, $tx, $throwable);
                    throw $throwable;
                }

                // 4. everything is fine, commit.
                $this->commitTransaction($tx);

                return $rs;
            } finally {
                // 5. clear
                ! empty($previousConfig) && $this->resumeGlobalLockConfig($previousConfig);
                $this->triggerAfterCompletion();
                $this->cleanUp();
            }
        } finally {
            // If the transaction is suspended, resume it.
            if ($suspendedResourcesHolder != null) {
                $tx->resume($suspendedResourcesHolder);
            }
        }
    }

    /**
     * @return TransactionHook[]
     */
    public function getCurrentHooks(): array
    {
        return TransactionHookManager::getHooks();
    }

    private function resumeGlobalLockConfig(GlobalLockConfig $config)
    {
        if ($config != null) {
            GlobalLockConfigHolder::setAndReturnPrevious($config);
        } else {
            GlobalLockConfigHolder::remove();
        }
    }

    private function existingTransaction(GlobalTransaction $tx): bool
    {
        return $tx != null;
    }

    private function notExistingTransaction(GlobalTransaction $tx): bool
    {
        return $tx == null;
    }

    private function replaceGlobalLockConfig(TransactionInfo $info)
    {
        $myConfig = new GlobalLockConfig();
        $myConfig->setLockRetryInterval($info->getLockRetryInterval());
        $myConfig->setLockRetryTimes($info->getLockRetryTimes());
        return GlobalLockConfigHolder::setAndReturnPrevious($myConfig);
    }

    private function beginTransaction(TransactionInfo $txInfo, GlobalTransaction $tx)
    {
        try {
            $this->triggerBeforeBegin();
            $tx->begin($txInfo->getTimeOut(), $txInfo->getName());
            $this->triggerAfterBegin();
        } catch (TransactionException $txe) {
            // @todo 异常抛错
            throw new ExecutionException($tx, TransactionalExecutorCode::BeginFailure, $txe);
        }
    }

    private function completeTransactionAfterThrowing(TransactionInfo $txInfo, GlobalTransaction $tx, Throwable $originalException)
    {
        // roll back
        if (! empty($tx) && $txInfo->rollbackOn($originalException)) {
            try {
                $this->rollbackTransaction($tx, $originalException);
            } catch (TransactionException $txe) {
                // Failed to rollback
                throw new ExecutionException($tx, TransactionalExecutorCode::RollbackFailure, $txe, $originalException);
            }
        } else {
            // not roll back on this exception, so commit
            $this->commitTransaction($tx);
        }
    }

    private function rollbackTransaction(GlobalTransaction $tx, Throwable $originalException)
    {
        $this->triggerBeforeRollback();
        $tx->rollback();
        $this->triggerAfterRollback();
        // 3.1 Successfully rolled back
        $code = $tx->getLocalStatus()->getStatus() === GlobalStatus::RollbackRetrying
            ? TransactionalExecutorCode::RollbackRetrying : TransactionalExecutorCode::RollbackDone;
        throw new ExecutionException($tx, $code, null, $originalException);
    }

    private function triggerBeforeRollback()
    {
        foreach ($this->getCurrentHooks() as $hook) {
            try {
                $hook->beforeRollback();
            } catch (Exception $e) {
                $this->logger->error(sprintf('Failed execute beforeRollback in Hook %s', $e->getMessage()));
            }
        }
    }

    private function triggerAfterRollback()
    {
        foreach ($this->getCurrentHooks() as $hook) {
            try {
                $hook->afterRollback();
            } catch (Exception $e) {
                $this->logger->error(sprintf('Failed execute afterRollback in Hook %s', $e->getMessage()));
            }
        }
    }

    private function commitTransaction(GlobalTransaction $tx)
    {
        try {
            $this->triggerBeforeCommit();
            $tx->commit();
            $this->triggerAfterCommit();
        } catch (TransactionException $txe) {
            // 4.1 Failed to commit
        }
    }

    private function triggerBeforeCommit()
    {
        foreach ($this->getCurrentHooks() as $hook) {
            try {
                $hook->afterCommit();
            } catch (Exception $e) {
                $this->logger->error(sprintf('Failed execute afterCommit in Hook %s', $e->getMessage()));
            }
        }
    }

    private function triggerAfterCommit()
    {
        foreach ($this->getCurrentHooks() as $hook) {
            try {
                $hook->afterCompletion();
            } catch (Exception $e) {
                $this->logger->error(sprintf('Failed execute afterCompletion in Hook %s', $e->getMessage()));
            }
        }
    }

    private function triggerBeforeBegin()
    {
        foreach ($this->getCurrentHooks() as $hook) {
            try {
                $hook->beforeBegin();
            } catch (Exception $e) {
                $this->logger->error(sprintf('Failed execute beforeBegin in Hook %s', $e->getMessage()));
            }
        }
    }

    private function triggerAfterBegin()
    {
        foreach ($this->getCurrentHooks() as $hook) {
            try {
                $hook->afterBegin();
            } catch (Exception $e) {
                $this->logger->error(sprintf('Failed execute afterBegin in Hook %s', $e->getMessage()));
            }
        }
    }

    private function triggerAfterCompletion()
    {
        foreach ($this->getCurrentHooks() as $hook) {
            try {
                $hook->afterCompletion();
            } catch (Exception $e) {
                $this->logger->error(sprintf('Failed execute afterCompletion in Hook %s', $e->getMessage()));
            }
        }
    }

    private function cleanUp()
    {
        TransactionHookManager::clear();
    }
}
