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
use Hyperf\Seata\Core\Protocol\AbstractResultMessage;
use Hyperf\Seata\Core\Protocol\MergedWarpMessage;
use Hyperf\Seata\Core\Protocol\MergeMessageInterface;
use Hyperf\Seata\Core\Protocol\MergeResultMessage;
use Hyperf\Seata\Core\Protocol\MessageFuture;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;
use Hyperf\Utils\ApplicationContext;

class ClientOnResponseProcessor implements RemotingProcessorInterface
{
    /**
     * @var StdoutLoggerInterface
     */
    protected $logger;

    /**
     * @var array<Integer, MergeMessageInterface>
     */
    private $mergeMsgMap;

    private $futures;

    /**
     * @var TransactionMessageHandler
     */
    private $transactionMessageHandler;

    /**
     * ClientOnResponseProcessor constructor.
     */
    public function __construct(array $mergeMsgMap, array $futures, TransactionMessageHandler $transactionMessageHandler)
    {
        $this->logger = ApplicationContext::getContainer()->get(StdoutLoggerInterface::class);
        $this->mergeMsgMap = $mergeMsgMap;
        $this->futures = $futures;
        $this->transactionMessageHandler = $transactionMessageHandler;
    }

    public function process($channel, RpcMessage $rpcMessage)
    {
        if ($rpcMessage->getBody() instanceof MergeResultMessage) {
            /** @var MergeResultMessage $results */
            $results = $rpcMessage->getBody();
            /** @var MergedWarpMessage $mergeMessage */
            $mergeMessage = $this->mergeMsgMap[$rpcMessage->getId()] ?? null;
            if ($mergeMessage !== null) {
                unset($this->mergeMsgMap[$rpcMessage->getId()]);
            }
            for ($i = 0; $i < count($mergeMessage->msgs); ++$i) {
                $msgId = $mergeMessage->msgIds[$i];
                /** @var MessageFuture $future */
                $future = $this->futures[$msgId] ?? null;
                if ($future !== null) {
                    unset($this->futures[$msgId]);
                    $future->setRequestMessage($results->getMsgs()[$i]);
                } else {
                    $this->logger->info(sprintf('msg: %s is not found in futures.', $msgId));
                }
            }
        } else {
            /** @var MessageFuture $future */
            $future = $this->futures[$rpcMessage->getId()] ?? null;
            if ($future !== null) {
                unset($this->futures[$rpcMessage->getId()]);
                $future->setRequestMessage($rpcMessage->getBody());
            } else {
                if ($rpcMessage->getBody() instanceof AbstractResultMessage) {
                    if ($this->transactionMessageHandler != null) {
                        $this->transactionMessageHandler->onResponse($rpcMessage->getBody(), null);
                    }
                }
            }
        }
    }
}
