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
namespace Hyperf\Seata\Core\Rpc\Runtime\Swow;

use Hyperf\Engine\Channel;
use Hyperf\Seata\Core\Protocol\MessageType;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Address;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;
use Hyperf\Seata\Core\Rpc\Runtime\ProcessorManager;
use Hyperf\Seata\Core\Rpc\Runtime\SocketChannelInterface;
use Hyperf\Seata\Core\Rpc\Runtime\V1\ProtocolV1Decoder;
use Hyperf\Seata\Core\Rpc\Runtime\V1\ProtocolV1Encoder;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Utils\Coroutine;
use Swow\Socket;
use function Swow\Tools\br;

class SocketChannel implements SocketChannelInterface
{
    protected ProtocolV1Encoder $protocolEncoder;

    protected ProtocolV1Decoder $protocolDecoder;

    protected int $messageId;

    protected Socket $socket;

    protected Address $address;

    protected array $responses = [];

    protected Channel $sendChannel;

    public function __construct(Socket $socket, Address $address)
    {
        $this->socket = $socket;
        $this->address = $address;
        $container = ApplicationContext::getContainer();
        $this->protocolEncoder = $container->get(ProtocolV1Encoder::class);
        $this->protocolDecoder = $container->get(ProtocolV1Decoder::class);
        $this->sendChannel = new Channel();
        $this->createRecvLoop();
        //$this->createSendLoop();
    }

    public function sendSyncWithResponse(RpcMessage $rpcMessage, int $timeoutMillis)
    {
        $channel = new Channel();
        echo 'Ready to send the rpc message #' . $rpcMessage->getId() . PHP_EOL;
        $this->responses[$rpcMessage->getId()] = $channel;
        $this->sendSyncWithoutResponse($rpcMessage, $timeoutMillis);
        return $channel->pop();
    }

    public function sendSyncWithoutResponse(RpcMessage $rpcMessage, int $timeoutMillis)
    {
        $data = $this->protocolEncoder->encode($rpcMessage);
        $this->socket->sendString($data);
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    protected function createRecvLoop()
    {
        Coroutine::create(function () {
            $processorManger = ApplicationContext::getContainer()->get(ProcessorManager::class);
            while (true) {
                try {
                    $data = $this->socket->recvStringData();


                    if (! $data) {
                        break;
                    }
                    $byteBuffer = ByteBuffer::wrapBinary($data);
                    $rpcMessage = $this->protocolDecoder->decode($byteBuffer);
                    $processorManger->dispatch($this, $rpcMessage);

                    echo 'Recieved a rpc message #' . $rpcMessage->getId() . PHP_EOL;
                    if (isset($this->responses[$rpcMessage->getId()])) {
                        $responseChannel = $this->responses[$rpcMessage->getId()];
                        $responseChannel->push($rpcMessage);
                    }  else {
//                        var_dump($rpcMessage);
                    }
//                    elseif ($rpcMessage->getMessageType() === MessageType::TYPE_HEARTBEAT_MSG) {
////                        var_dump('heartbeat', $rpcMessage);
//                    }
                } catch (\InvalidArgumentException $exception) {
                    echo 'Recieved a rpc message fail error:' . $exception->getMessage() . PHP_EOL;
                    break;
                } catch (\Throwable $exception) {
                    echo 'Recieved a rpc message fail error:' . $exception->getMessage() . PHP_EOL;
                    break;
                } finally {
                    isset($rpcMessage) && $this->responses[$rpcMessage->getId()]->close();
                }
            }
        });
    }
}
