<?php

namespace Hyperf\Seata\Core\Rpc\Swoole;


use Exception;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse;
use Hyperf\Seata\Core\Rpc\AbstractRpcRemoting;
use Hyperf\Seata\Core\Rpc\Address;
use Hyperf\Seata\Core\Rpc\RemotingClientInterface;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;
use Hyperf\Seata\Discovery\Registry\RegistryFactory;
use Hyperf\Seata\Exception\SeataErrorCode;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Seata\Tm\TransactionManagerHolder;
use Hyperf\Utils\ApplicationContext;

abstract class AbstractRemotingClient extends AbstractRpcRemoting implements RemotingClientInterface
{

    /**
     * @var TransactionMessageHandler
     */
    protected $transactionMessageHandler;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @var RegistryFactory
     */
    protected $registryFactory;

    protected const MSG_ID_PREFIX = "msgId:";
    protected const FUTURES_PREFIX = "futures:";
    protected const SINGLE_LOG_POSTFIX = ";";
    protected const MAX_MERGE_SEND_MILLS = 1;
    protected const THREAD_PREFIX_SPLIT_CHAR = "_";

    protected const MAX_MERGE_SEND_THREAD = 1;
    protected const KEEP_ALIVE_TIME = PHP_INT_MAX;
    protected const SCHEDULE_INTERVAL_MILLS = 5;
    protected const MERGE_THREAD_PREFIX = "rpcMergeMessageSend";

    /**
     * @see \Hyperf\Seata\Core\Rpc\TransactionRole
     */
    protected int $transactionRole;
    protected SwooleClientConnectionManager $connectionManager;

    public function __construct(int $transactionRole)
    {
        parent::__construct();
        $this->transactionRole = $transactionRole;
        $container = ApplicationContext::getContainer();
        $this->registryFactory = $container->get(RegistryFactory::class);
        $this->connectionManager = $container->get(SwooleClientConnectionManager::class);
    }

    public function init() {
        // @TODO 启动一个 reconnect 的 Timer
    }

    /**
     * @param \Hyperf\Seata\Core\Protocol\AbstractMessage $message
     * @param int $timeout
     * @return \Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse
     */
    public function sendMsgWithResponse(AbstractMessage $message, int $timeout = 100)
    {
        $validAddress = $this->loadBalance($this->getTransactionServiceGroup());
        $connection = $this->connectionManager->acquireConnection($validAddress);
        $result = $this->sendAsyncRequestWithResponse($connection, $message, $timeout);
        $connection->release();
        if ($result instanceof GlobalBeginResponse && ! $result->getResultCode()) {
            if ($this->logger) {
                $this->logger->error('begin response error,release socket');
            }
        }
        return $result;
    }

    abstract protected function getTransactionServiceGroup(): string;

    private function loadBalance(string $transactionServiceGroup): ?Address
    {
        $address = null;
        try {
            $addressList = $this->registryFactory->getInstance()->lookup($transactionServiceGroup);
            // @todo 通过负载均衡器选择一个地址
            $address = $addressList[0];
        } catch (Exception $exception) {
            if ($this->logger) {
                $this->logger->error($exception->getMessage());
            }
        }
        if (! $address instanceof Address) {
            throw new SeataException(SeataErrorCode::NoAvailableService);
        }
        return $address;
    }

    public function setTransactionMessageHandler(TransactionMessageHandler $transactionMessageHandler) {
        $this->transactionMessageHandler = $transactionMessageHandler;
    }
}
