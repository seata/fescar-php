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
namespace Hyperf\Seata\Core\Rpc\Processor\Client;

use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Protocol\Transaction\BranchRollbackRequest;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;
use Hyperf\Seata\Core\Rpc\RemotingClientInterface;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;
use Throwable;

class RmBranchRollbackProcessor extends AbstractRemotingProcessor
{
    private TransactionMessageHandler $handler;

    private RemotingClientInterface $remotingClient;

    public function __construct(TransactionMessageHandler $handler, RemotingClientInterface $remotingClient)
    {
        $this->handler = $handler;
        $this->remotingClient = $remotingClient;
    }

    public function process($channel, RpcMessage $rpcMessage)
    {
        /** @var BranchRollbackRequest $msg */
        $msg = $rpcMessage->getBody();
        $this->getLogger()->info(sprintf('rm handle branch rollback process:%s', $msg));
        $this->handleBranchRollback($rpcMessage, $channel, $msg);
    }

    private function handleBranchRollback(RpcMessage $rpcMessage, $channel, BranchRollbackRequest $branchCommitRequest)
    {
        $resultMessage = $this->handler->onRequest($branchCommitRequest, null);
        $this->getLogger()->debug(sprintf('branch rollback result:%s', $resultMessage));
        try {
            $this->remotingClient->sendAsyncResponse($channel, $rpcMessage, $resultMessage);
        } catch (Throwable $throwable) {
            $this->getLogger()->error(sprintf('"send response error: %s', $throwable->getMessage()));
        }
    }
}
