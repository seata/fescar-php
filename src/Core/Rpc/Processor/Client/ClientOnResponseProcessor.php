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

use Hyperf\Seata\Core\Protocol\AbstractResultMessage;
use Hyperf\Seata\Core\Protocol\MergedWarpMessage;
use Hyperf\Seata\Core\Protocol\MergeMessageInterface;
use Hyperf\Seata\Core\Protocol\MergeResultMessage;
use Hyperf\Seata\Core\Protocol\MessageFuture;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;
use Hyperf\Seata\Core\Rpc\Runtime\SocketChannelInterface;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;

class ClientOnResponseProcessor extends AbstractRemotingProcessor
{
    private null|TransactionMessageHandler $transactionMessageHandler;

    public function __construct(?TransactionMessageHandler $transactionMessageHandler)
    {
        $this->transactionMessageHandler = $transactionMessageHandler;
    }

    public function process(SocketChannelInterface $channel, RpcMessage $rpcMessage)
    {
        if ($rpcMessage->getBody() instanceof AbstractResultMessage && $this->transactionMessageHandler != null) {
            $this->transactionMessageHandler->onResponse($rpcMessage->getBody(), null);
        }
    }
}
