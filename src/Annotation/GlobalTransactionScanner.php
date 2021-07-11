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
namespace Hyperf\Seata\Annotation;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Rm\RMClient;
use Hyperf\Seata\Tm\TMClient;
use Psr\Log\LoggerInterface;

class GlobalTransactionScanner
{
    private const serialVersionUID = 1;

    private const AT_MODE = 1;

    private const MT_MODE = 2;

    private const DEFAULT_MODE = self::AT_MODE + self::MT_MODE;

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

    /**
     * @var \Hyperf\Seata\Tm\TMClient
     */
    protected $TMClient;

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
     * @var string
     */
    private $accessKey;

    /**
     * @var string
     */
    private $secretKey;

    public function __construct(ConfigInterface $config, LoggerInterface $logger, RMClient $RMClient, TMClient $TMClient)
    {
        $this->config = $config;
        $this->applicationId = $this->config->get('seata.application_id');
        $this->txServiceGroup = $this->config->get('seata.tx_service_group');
        $this->accessKey = $this->config->get('seata.access_key');
        $this->secretKey = $this->config->get('seata.secret_key');
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
        $this->TMClient = $TMClient;
    }

    public function initClients()
    {
        $this->dumpInfo('Initializing Global Transaction Clients ... ');
        // @todo Init TM
        $this->TMClient->init($this->applicationId, $this->txServiceGroup, $this->accessKey, $this->secretKey);
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
