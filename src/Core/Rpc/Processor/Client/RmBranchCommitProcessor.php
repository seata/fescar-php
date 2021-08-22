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

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Protocol\Transaction\BranchCommitRequest;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;
use Hyperf\Seata\Core\Rpc\RemotingClientInterface;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;
use Hyperf\Utils\ApplicationContext;

class RmBranchCommitProcessor implements RemotingProcessorInterface
{
    /**
     * @var StdoutLoggerInterface
     */
    protected $logger;

    /**
     * @var TransactionMessageHandler
     */
    private $handler;

    /**
     * @var RemotingClientInterface
     */
    private $remotingClient;

    public function __construct(TransactionMessageHandler $handler, RemotingClientInterface $remotingClient)
    {
        $this->logger = ApplicationContext::getContainer()->get(StdoutLoggerInterface::class);
        $this->handler = $handler;
        $this->remotingClient = $remotingClient;
    }

    public function process($channel, RpcMessage $rpcMessage)
    {
        /** @var BranchCommitRequest $msg */
        $msg = $rpcMessage->getBody();
        $this->logger->info(sprintf('rm client handle branch commit process: %s', $msg));
        $this->handleBranchCommit($rpcMessage, $channel, $msg);
    }

    private function handleBranchCommit(RpcMessage $rpcMessage, $channel, BranchCommitRequest $branchCommitRequest)
    {
        $resultMessage = $this->handler->onRequest($branchCommitRequest, null);
        $this->logger->debug(sprintf('branch commit result:%s', $resultMessage->getMessage()));
        try {
            $this->remotingClient->sendAsyncResponse($channel, $rpcMessage, $resultMessage);
        } catch (\Throwable $exception) {
            $this->logger->debug(sprintf('branch commit error: %s', $exception->getMessage()));
        }
    }
}
