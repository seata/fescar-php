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
use Hyperf\Seata\Core\Protocol\Transaction\BranchCommitRequest;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;
use Hyperf\Seata\Core\Rpc\RemotingClientInterface;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;
use Throwable;

class RmBranchCommitProcessor extends AbstractRemotingProcessor
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
        /** @var BranchCommitRequest $msg */
        $msg = $rpcMessage->getBody();
        $this->getLogger()->info(sprintf('rm client handle branch commit process: %s', $msg));
        $this->handleBranchCommit($rpcMessage, $channel, $msg);
    }

    private function handleBranchCommit(RpcMessage $rpcMessage, $channel, BranchCommitRequest $branchCommitRequest)
    {
        $resultMessage = $this->handler->onRequest($branchCommitRequest, null);
        $this->getLogger()->debug(sprintf('branch commit result:%s', $resultMessage->getMessage()));
        try {
            $this->remotingClient->sendAsyncResponse($channel, $rpcMessage, $resultMessage);
        } catch (Throwable $exception) {
            $this->getLogger()->debug(sprintf('branch commit error: %s', $exception->getMessage()));
        }
    }
}
