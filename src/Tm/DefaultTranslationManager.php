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
namespace Hyperf\Seata\Tm;

use Hyperf\Seata\Common\AddressTarget;
use Hyperf\Seata\Core\Model\GlobalStatus;
use Hyperf\Seata\Core\Model\TransactionManager;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalCommitRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalCommitResponse;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalRollbackRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalRollbackResponse;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalStatusRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalStatusResponse;
use Hyperf\Seata\Core\Rpc\Runtime\TmRemotingClient;

class DefaultTranslationManager implements TransactionManager
{
    /**
     * @var TmRemotingClient
     */
    protected $tmRpcClient;

    public function __construct(TmRemotingClient $tmRpcClient)
    {
        $this->tmRpcClient = $tmRpcClient;
    }

    public function begin(?string $applicationId, ?string $transactionServiceGroup, string $name, int $timeout): string
    {
        $request = new GlobalBeginRequest();
        $request->setTransactionName($name);
        $request->setTimeout($timeout);

        /** @var GlobalBeginResponse $response */
        $response = $this->sendRequest($request)->getBody();

        return $response->getXid();
    }

    public function commit(string $xid): GlobalStatus
    {
        $request = new GlobalCommitRequest();
        $request->setXid($xid);
        /** @var GlobalCommitResponse $response */
        $response = $this->sendRequest($request);
        return $response->getBody()->getGlobalStatus();
    }

    public function rollback(string $xid): GlobalStatus
    {
        $request = new GlobalRollbackRequest();
        $request->setXid($xid);
        /** @var GlobalRollbackResponse $response */
        $response = $this->sendRequest($request)->getBody();
        return $response->getGlobalStatus();
    }

    public function getStatus(string $xid): int
    {
        $request = new GlobalStatusRequest();
        $request->setXid($xid);
        /** @var GlobalStatusResponse $response */
        $response = $this->sendRequest($request)->getBody();
        return $response->getGlobalStatus()->getStatus();
    }

    protected function sendRequest(AbstractTransactionRequest $request)
    {
        // @TODO 处理超时状态，抛出 TransactionException
        return $this->tmRpcClient->sendMsgWithResponse($request, AddressTarget::TM);
    }
}
