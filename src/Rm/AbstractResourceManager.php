<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
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
namespace Hyperf\Seata\Rm;

use Hyperf\Seata\Common\AddressTarget;
use Hyperf\Seata\Core\Model\Resource;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Core\Protocol\ResultCode;
use Hyperf\Seata\Core\Protocol\Transaction\BranchRegisterRequest;
use Hyperf\Seata\Core\Protocol\Transaction\BranchReportResponse;
use Hyperf\Seata\Core\Rpc\Runtime\RmRemotingClient;
use Hyperf\Seata\Exception\NotSupportYetException;
use Hyperf\Seata\Exception\TimeoutException;
use Hyperf\Seata\Exception\TransactionException;
use Hyperf\Seata\Exception\TransactionExceptionCode;
use RuntimeException;

abstract class AbstractResourceManager implements ResourceManagerInterface
{
    protected RmRemotingClient $rmRemotingClient;

    public function __construct(RmRemotingClient $rmRemotingClient)
    {
        $this->rmRemotingClient = $rmRemotingClient;
    }

    public function registerResource(Resource $resource): void
    {
        $this->rmRemotingClient->registerResource($resource->getResourceGroupId(), $resource->getResourceId());
    }

    public function unregisterResource(Resource $resource): void
    {
        throw new NotSupportYetException('Unregister a resource');
    }

    public function branchRegister(
        int $branchType,
        string $resourceId,
        string $clientId,
        string $xid,
        string $applicationData,
        string $lockKeys
    ): int {
        try {
            $request = new BranchRegisterRequest();
            $request->setXid($xid)
                ->setLockKey($lockKeys)
                ->setResourceId($resourceId)
                ->setBranchType($branchType)
                ->setApplicationData($applicationData);

            $response = $this->rmRemotingClient->sendMsgWithResponse($request, AddressTarget::RM);

            if ($response->getResultCode() === ResultCode::Failed) {
                throw new TransactionException(sprintf('Response[%s]', $response->getMessage()), $response->getTransactionExceptionCode());
            }
            return $response->getBranchId();
        } catch (TimeoutException $exception) {
            throw new TransactionException('RPC Timeout', TransactionExceptionCode::IO, $exception);
        } catch (RuntimeException $exception) {
            throw new TransactionException('BranchRegisterFailed', TransactionExceptionCode::BranchRegisterFailed, $exception);
        }
    }

    public function branchReport(
        int $branchType,
        string $xid,
        int $branchId,
        int $status,
        string $applicationData
    ): void {
        try {
            $request = new BranchReportRequest();
            $request->setXid($xid);
            $request->setBranchId($branchId);
            $request->setStatus($status);
            $request->setApplicationData($applicationData);
            $response = $this->rmRemotingClient->sendMsgWithResponse($request, AddressTarget::RM);
            if (! $response instanceof BranchReportResponse) {
                throw new RuntimeException('The response object is not valid');
            }
            if ($response->getResultCode() === ResultCode::Failed) {
                throw new TransactionException(sprintf('Response[%s]', $response->getMessage()), $response->getTransactionExceptionCode());
            }
        } catch (TimeoutException $exception) {
            throw new TransactionException('RPC Timeout', TransactionExceptionCode::IO, $exception);
        } catch (RuntimeException $exception) {
            throw new TransactionException('BranchRegisterFailed', TransactionExceptionCode::BranchRegisterFailed, $exception);
        }
    }

    public function lockQuery(int $branchType, string $resourceId, string $xid, string $lockKeys): bool
    {
        return false;
    }
}
