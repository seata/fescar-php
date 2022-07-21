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
namespace Hyperf\Seata\Rm;

use Hyperf\Seata\Core\Exception\AbstractExceptionHandler;
use Hyperf\Seata\Core\Exception\Callbak\AbstractCallback;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\AbstractResultMessage;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractBranchEndRequest;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractBranchEndResponse;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequest;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequestToRM;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionResponse;
use Hyperf\Seata\Core\Protocol\Transaction\BranchCommitRequest;
use Hyperf\Seata\Core\Protocol\Transaction\BranchCommitResponse;
use Hyperf\Seata\Core\Protocol\Transaction\BranchRollbackRequest;
use Hyperf\Seata\Core\Protocol\Transaction\BranchRollbackResponse;
use Hyperf\Seata\Core\Protocol\Transaction\RMInboundHandler;
use Hyperf\Seata\Core\Protocol\Transaction\UndoLogDeleteRequest;
use Hyperf\Seata\Core\Rpc\RpcContext;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;
use Hyperf\Seata\Exception\IllegalArgumentException;
use Hyperf\Utils\ApplicationContext;

abstract class AbstractRMHandler extends AbstractExceptionHandler implements RMInboundHandler, TransactionMessageHandler
{
    abstract public function getBranchType(): int;

    public function handle(AbstractBranchEndRequest $request): ?AbstractBranchEndResponse
    {
        if ($request instanceof BranchCommitRequest) {
            return $this->handleBranchCommitRequest($request);
        }

        if ($request instanceof BranchRollbackRequest) {
            return $this->handleBranchRollbackRequest($request);
        }

        if ($request instanceof UndoLogDeleteRequest) {
            $this->handleUndoLogDeleteRequest($request);
        }
    }

    public function onRequest(AbstractMessage $request, ?RpcContext $context): AbstractResultMessage
    {
        if (! $request instanceof AbstractTransactionRequestToRM) {
            throw new IllegalArgumentException();
        }
        $request->setRMInboundMessageHandler($this);
        return $request->handle($context);
    }

    public function onResponse(AbstractResultMessage $response, ?RpcContext $context)
    {
        $this->logger->info(sprintf('the rm client received response msg [%s] from tc server.', $response->getMessage()));
    }

    public function doBranchCommit(BranchCommitRequest $request, BranchCommitResponse $response)
    {
        $xid = $request->getXid();
        $branchId = $request->getBranchId();
        $resourceId = $request->getResourceId();
        $applicationData = $request->getApplicationData();
        $this->logger->info(sprintf('Branch committing: %s %s %s %s', $xid, $branchId, $resourceId, $applicationData));
        $status = $this->getResourceManager()->branchRollback($request->getBranchType(), $xid, $branchId, $resourceId, $applicationData);
        $response->setXid($xid);
        $response->setBranchId($branchId);
        $response->setBranchStatus($status);
        $this->logger->info(sprintf('Branch commit result:  %s', $status));
    }

    public function doBranchRollback(BranchRollbackRequest $request, BranchRollbackResponse $response)
    {
        $xid = $request->getXid();
        $branchId = $request->getBranchId();
        $resourceId = $request->getResourceId();
        $applicationData = $request->getApplicationData();
        $this->logger->info(sprintf('Branch Rollbacking: %s %s %s', $xid, $branchId, $resourceId));
        $status = $this->getResourceManager()->branchRollback($request->getBranchType(), $xid, $branchId, $resourceId, $applicationData);
        $response->setXid($xid);
        $response->setBranchId($branchId);
        $response->setBranchStatus($status);
        $this->logger->info(sprintf('Branch Rollbacked result: %s', $status));
    }

    /**
     * get resource manager implement.
     *
     * @return resource manager
     */
    abstract protected function getResourceManager(): ResourceManagerInterface;

    private function handleBranchCommitRequest(BranchCommitRequest $request)
    {
        $response = new BranchCommitResponse();
        $this->exceptionHandleTemplate(new class($this) extends AbstractCallback {
            /**
             * @var AbstractRMHandler
             */
            protected $handler;

            public function __construct(AbstractRMHandler $handler)
            {
                $this->handler = $handler;
            }

            public function execute(AbstractTransactionRequest $request, AbstractTransactionResponse $response)
            {
                $this->handler->doBranchCommit($request, $response);
            }
        }, $request, $response);
        return $response;
    }

    private function handleBranchRollbackRequest(BranchRollbackRequest $request)
    {
        $response = new BranchRollbackResponse();
        $handler = ApplicationContext::getContainer()->get(RMHandlerAT::class);
        $this->exceptionHandleTemplate(new class($handler) extends AbstractCallback {
            protected RMHandlerAT $handler;

            public function __construct(RMHandlerAT $handler)
            {
                // TODO 这里看看是否处理有问题
                $this->handler = $handler;
            }

            public function execute(AbstractTransactionRequest $request, AbstractTransactionResponse $response)
            {
                $this->handler->doBranchRollback($request, $response);
            }
        }, $request, $response);

        return $response;
    }

    private function handleUndoLogDeleteRequest(UndoLogDeleteRequest $request)
    {
    }
}
