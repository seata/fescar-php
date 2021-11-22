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
namespace Hyperf\Seata\Core\Rpc\Runtime;

use Exception;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Process\ProcessManager;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\HeartbeatMessage;
use Hyperf\Seata\Core\Protocol\ProtocolConstants;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse;
use Hyperf\Seata\Core\Rpc\AbstractRpcRemoting;
use Hyperf\Seata\Core\Rpc\Address;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;
use Hyperf\Seata\Core\Rpc\RemotingClientInterface;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;
use Hyperf\Seata\Discovery\Registry\RegistryFactory;
use Hyperf\Seata\Exception\SeataErrorCode;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Seata\Logger\StdoutLogger;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Utils\Coroutine;

abstract class AbstractRemotingClient extends AbstractRpcRemoting implements RemotingClientInterface
{
    protected const MSG_ID_PREFIX = 'msgId:';

    protected const FUTURES_PREFIX = 'futures:';

    protected const SINGLE_LOG_POSTFIX = ';';

    protected const MAX_MERGE_SEND_MILLS = 1;

    protected const THREAD_PREFIX_SPLIT_CHAR = '_';

    protected const MAX_MERGE_SEND_THREAD = 1;

    protected const KEEP_ALIVE_TIME = PHP_INT_MAX;

    protected const SCHEDULE_INTERVAL_MILLS = 5;

    protected const MERGE_THREAD_PREFIX = 'rpcMergeMessageSend';

    protected null|TransactionMessageHandler $transactionMessageHandler = null;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @var RegistryFactory
     */
    protected $registryFactory;

    /**
     * @see \Hyperf\Seata\Core\Rpc\TransactionRole
     */
    protected int $transactionRole;

    protected array $recvChannelMap = [];


    protected ProcessorManager $processorManager;

    public function __construct(int $transactionRole)
    {
        parent::__construct();
        $container = ApplicationContext::getContainer();
        $this->transactionRole = $transactionRole;
        $this->registryFactory = $container->get(RegistryFactory::class);
    }

    public function init()
    {
        // @TODO 启动一个 reconnect 的 Timer
        //\Hyperf\Engine\Coroutine::create(function () {
        //    $this->socketManager->reconnect($this->transactionServiceGroup);
        //});

        parent::init();
        // TODO merge send runnable
//        (new MergedSendRunnable($this->isSending, $this->basketMap, $this))->run();
    }


    /**
     * @return \Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse
     */
    public function sendMsgWithResponse(AbstractMessage $message, string $target, int $timeout = 100)
    {
        $validAddress = $this->loadBalance($this->getTransactionServiceGroup());
        $validAddress->setTarget($target);
        $socketChannel = $this->acquireChannel($validAddress);
        $result = $this->sendAsyncRequestWithResponse($socketChannel, $message, $timeout);
        if ($result instanceof GlobalBeginResponse && ! $result->getResultCode()) {
            $this->logger->error('begin response error,release socket');
        }
        return $result;
    }

    abstract protected function acquireChannel(Address $address): SocketChannelInterface;

    /**
     * @return \Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse
     */
    public function sendMsgWithNoResponse(AbstractMessage $message, int $timeout = 100)
    {
        $validAddress = $this->loadBalance($this->getTransactionServiceGroup());
        $socketChannel = $this->acquireChannel($validAddress);
        $this->sendAsyncRequestWithResponse($socketChannel, $message, $timeout);
    }

    public function setTransactionMessageHandler(TransactionMessageHandler $transactionMessageHandler)
    {
        $this->transactionMessageHandler = $transactionMessageHandler;
    }

    public function getTransactionMessageHandler(): ?TransactionMessageHandler
    {
        return $this->transactionMessageHandler;
    }

    abstract protected function getTransactionServiceGroup(): string;

    /**
     * @return array<Address>
     */
    protected function lookupAddresses(string $transactionServiceGroup): array
    {
        return $this->registryFactory->getInstance()->lookup($transactionServiceGroup);
    }

    private function loadBalance(string $transactionServiceGroup): ?Address
    {
        $address = null;
        try {
            $addressList = $this->lookupAddresses($transactionServiceGroup);
            // @todo 通过负载均衡器选择一个地址
            $address = $addressList[0];
        } catch (Exception $exception) {
            $this->logger->error($exception->getMessage());
        }
        if (! $address instanceof Address) {
            throw new SeataException(SeataErrorCode::NoAvailableService);
        }
        return $address;
    }

    public function sendAsyncResponse(Address $serverAddress, RpcMessage $rpcMessage, object $message)
    {
        $rpcMsg = $this->buildResponseMessage($rpcMessage, $message, ProtocolConstants::MSGTYPE_RESPONSE);
        $this->sendAsync($serverAddress, $rpcMsg);
    }
}
