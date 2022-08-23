<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Annotation;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Rm\RMClient;
use Hyperf\Seata\Tm\TMClient;
use Psr\Log\LoggerInterface;

class GlobalTransactionScanner
{
    private const serialVersionUID = 1;

    private const AT_MODE = 1;

    private const MT_MODE = 2;

    private const DEFAULT_MODE = self::AT_MODE + self::MT_MODE;

    protected ConfigInterface $config;

    protected LoggerInterface $logger;

    protected RMClient $RMClient;

    protected TMClient $TMClient;

    private string $applicationId;

    private string $txServiceGroup;

    private int $mode = self::DEFAULT_MODE;

    private bool $disableGlobalTransaction;

    private null|string $accessKey = null;

    private null|string $secretKey = null;

    public function __construct(ConfigInterface $config, LoggerFactory $loggerFactory, RMClient $RMClient, TMClient $TMClient)
    {
        $this->config = $config;
        $this->applicationId = (string) $this->config->get('seata.application_id');
        $this->txServiceGroup = (string) $this->config->get('seata.tx_service_group');
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
        $this->logger = $loggerFactory->create(static::class);
        $this->RMClient = $RMClient;
        $this->TMClient = $TMClient;
    }

    public function initClients()
    {
        $this->dumpInfo('Initializing Global Transaction Clients ... ');
        // Init TM Client
        $this->TMClient->init($this->applicationId, $this->txServiceGroup, $this->accessKey, $this->secretKey);
        $this->dumpInfo(sprintf('Transaction Manager Client is initialized. applicationId[%s] txServiceGroup[%s]', $this->applicationId, $this->txServiceGroup));
        // Init RM Client
        $this->RMClient->init($this->applicationId, $this->txServiceGroup);
        $this->dumpInfo(sprintf('Resource Manager Client is initialized. applicationId[%s] txServiceGroup[%s]', $this->applicationId, $this->txServiceGroup));
        $this->dumpInfo('Global Transaction Clients are initialized');
    }

    protected function dumpInfo(string $message): void
    {
        if ($this->logger) {
            $this->logger->info($message);
        }
    }
}
