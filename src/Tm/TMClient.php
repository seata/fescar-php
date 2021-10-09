<?php


namespace Hyperf\Seata\Tm;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Rpc\Swoole\TmClient;

class TMClient
{
    /**
     * @var TmClient
     */
    protected $tmRpcClient;

    /**
     * @var ConfigInterface
     */
    protected $config;

    /**
     * TMClient constructor.
     *
     * @param TmClient $tmRpcClient
     * @param ConfigInterface $config
     */
    public function __construct(TmClient $tmRpcClient, ConfigInterface $config)
    {
        $this->tmRpcClient = $tmRpcClient;
        $this->config = $config;
    }


    public function init(string $applicationId, string $transactionServiceGroup, ?string $accessKey = null, ?string $secretKey = null)
    {
        $this->tmRpcClient->setApplicationId($applicationId);
        $this->tmRpcClient->setTransactionServiceGroup($transactionServiceGroup);
        $this->tmRpcClient->setAccessKey($accessKey);
        $this->tmRpcClient->setSecretKey($secretKey);
        $this->tmRpcClient->init();
    }

}