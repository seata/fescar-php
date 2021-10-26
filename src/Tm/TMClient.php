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
namespace Hyperf\Seata\Tm;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Rpc\Runtime\TmClient as SwooleTMClient;

class TMClient
{
    protected SwooleTMClient $tmRpcClient;

    protected ConfigInterface $config;

    public function __construct(SwooleTMClient $tmRpcClient, ConfigInterface $config)
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
