<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Seata\Rm;

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Exception\AbstractExceptionHandler;
use Hyperf\Seata\Core\Exception\Callbak\AbstractCallback;
use Hyperf\Seata\Core\Model\ResourceManager;
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
    public function handle(AbstractBranchEndRequest $request): AbstractBranchEndResponse
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

    public function onRequest(AbstractMessage $request, RpcContext $context): AbstractResultMessage
    {
        if (! ($request instanceof AbstractTransactionRequestToRM)) {
            throw new IllegalArgumentException();
        }
        $request->setRMInboundMessageHandler($this);
        return $request->handle($context);
    }

    public function onResponse(AbstractResultMessage $response, RpcContext $context)
    {
        $stdoutLogger = ApplicationContext::getContainer()->get(StdoutLoggerInterface::class);
        $stdoutLogger->info(sprintf('the rm client received response msg [%s] from tc server.', $response->getMessage()));
    }

    public function doBranchCommit(BranchCommitRequest $request, BranchCommitResponse $response)
    {
        $stdoutLogger = ApplicationContext::getContainer()->get(StdoutLoggerInterface::class);
        $xid = $request->getXid();
        $branchId = $request->getBranchId();
        $resourceId = $request->getResourceId();
        $applicationData = $request->getApplicationData();
        $stdoutLogger->info(sprintf('Branch committing: %s %s %s %s', $xid, $branchId, $resourceId, $applicationData));
        $status = $this->getResourceManager()->branchRollback($request->getBranchType(), $xid, $branchId, $resourceId, $applicationData);
        $response->setXid($xid);
        $response->setBranchId($branchId);
        $response->setBranchStatus($status);
        $stdoutLogger->info(sprintf('Branch commit result:  %s', $status));
    }

    public function doBranchRollback(BranchRollbackRequest $request, BranchRollbackResponse $response)
    {
        $stdoutLogger = ApplicationContext::getContainer()->get(StdoutLoggerInterface::class);
        $xid = $request->getXid();
        $branchId = $request->getBranchId();
        $resourceId = $request->getResourceId();
        $applicationData = $request->getApplicationData();
        $stdoutLogger->info(sprintf('Branch Rollbacking: %s %s %s', $xid, $branchId, $resourceId));
        $status = $this->getResourceManager()->branchRollback($request->getBranchType(), $xid, $branchId, $resourceId, $applicationData);
        $response->setXid($xid);
        $response->setBranchId($branchId);
        $response->setBranchStatus($status);
        $stdoutLogger->info(sprintf('Branch Rollbacked result: %s', $status));
    }

    /**
     * get resource manager implement.
     *
     * @return resource manager
     */
    abstract protected function getResourceManager(): ResourceManager;

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
                $this->handler->doBranchRollback($request, $response);
            }
        }, $request, $response);
        return $response;
    }

    private function handleUndoLogDeleteRequest(UndoLogDeleteRequest $request)
    {

    }
}
