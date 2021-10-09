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
namespace Hyperf\Seata\Core\Rpc;

use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;

interface RemotingClientInterface
{
    /**
     * client send sync request.
     *
     * @param channel client channel
     * @param msg     transaction message {@link io.seata.core.protocol}
     * @param mixed $channel
     * @throws TimeoutException TimeoutException
     * @return server result message
     */
    public function sendSyncRequest($channel, object $msg);

    /**
     * client send async request.
     *
     * @param channel client channel
     * @param msg     transaction message {@link io.seata.core.protocol}
     * @param mixed $channel
     */
    public function sendAsyncRequest($channel, object $msg);

    /**
     * client send async response.
     *
     * @param serverAddress server address
     * @param rpcMessage    rpc message from server request
     * @param msg           transaction message {@link io.seata.core.protocol}
     */
    public function sendAsyncResponse(string $serverAddress, RpcMessage $rpcMessage, object $msg);

    /**
     * On register msg success.
     *
     * @param serverAddress  the server address
     * @param channel        the channel
     * @param response       the response
     * @param requestMessage the request message
     * @param mixed $channel
     */
    public function onRegisterMsgSuccess(string $serverAddress, $channel, object $response, AbstractMessage $requestMessage);

    /**
     * On register msg fail.
     *
     * @param serverAddress  the server address
     * @param channel        the channel
     * @param response       the response
     * @param requestMessage the request message
     * @param mixed $channel
     */
    public function onRegisterMsgFail(string $serverAddress, $channel, object $response, AbstractMessage $requestMessage);

    /**
     * register processor.
     *
     * @param messageType {@link io.seata.core.protocol.MessageType}
     * @param processor   {@link RemotingProcessor}
     * @param executor    thread pool
     */
    public function registerProcessor(int $messageType, RemotingProcessorInterface $processor, callable $executor);
}
