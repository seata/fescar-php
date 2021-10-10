<?php

namespace Hyperf\Seata\Annotation;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Core\Rpc\Swoole\RmRemotingClient;
use Hyperf\Seata\Rm\RMClient;
use Hyperf\Utils\ApplicationContext;
use Psr\Log\LoggerInterface;

class GlobalTransactionScanner
{

    private const serialVersionUID = 1;

    private const AT_MODE = 1;
    private const MT_MODE = 2;

    private const DEFAULT_MODE = self::AT_MODE + self::MT_MODE;

    /**
     * @var string
     */
    private $applicationId;

    /**
     * @var string
     */
    private $txServiceGroup;

    /**
     * @var int
     */
    private $mode = self::DEFAULT_MODE;

    /**
     * @var bool
     */
    private $disableGlobalTransaction;

    /**
     * @var \Hyperf\Contract\ConfigInterface
     */
    protected $config;

    /**
     * @var \Hyperf\Contract\StdoutLoggerInterface
     */
    protected $logger;

    /**
     * @var \Hyperf\Seata\Rm\RMClient
     */
    protected $RMClient;

    public function __construct(ConfigInterface $config, LoggerInterface $logger, RMClient $RMClient)
    {
        $this->config = $config;
        $this->applicationId = $this->config->get('seata.application_id');
        $this->txServiceGroup = $this->config->get('seata.tx_service_group');
        // @TODO mode
        $this->mode = $this->config->get('seata.mode', self::DEFAULT_MODE);
        // @TODO disableGlobalTransaction
        $this->disableGlobalTransaction = $this->config->get('seata.service.disable_global_transaction', false);
        if (! $this->applicationId) {
            throw new \InvalidArgumentException('Config seata.application_id does not exist');
        }
        if (! $this->txServiceGroup) {
            throw new \InvalidArgumentException('Config seata.tx_service_group does not exist');
        }
        $this->logger = $logger;
        $this->RMClient = $RMClient;
    }

    public function initClients()
    {
        $this->dumpInfo("Initializing Global Transaction Clients ... ");
        // @todo Init TM
        // Init RM
        $this->RMClient->init($this->applicationId, $this->txServiceGroup);
        $this->dumpInfo(sprintf('Resource Manager is initialized. applicationId[%s] txServiceGroup[%s]', $this->applicationId, $this->txServiceGroup));
        $this->dumpInfo('Global Transaction Clients are initialized');
    }

    protected function dumpInfo(string $message): void
    {
        if ($this->logger) {
            $this->logger->info($message);
        }
    }

}