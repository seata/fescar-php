<?php

namespace Hyperf\Seata\Rm;


use Exception;
use Hyperf\Seata\Core\Model\Resource;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Core\Model\the;
use Hyperf\Seata\Core\Protocol\ResultCode;
use Hyperf\Seata\Core\Protocol\Transaction\BranchRegisterRequest;
use Hyperf\Seata\Core\Protocol\Transaction\BranchRegisterResponse;
use Hyperf\Seata\Core\Protocol\Transaction\BranchReportResponse;
use Hyperf\Seata\Core\Rpc\Swoole\RmRemotingClient;
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
        throw new NotSupportYetException("Unregister a resource");
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

            $response = $this->rmRemotingClient->sendMsgWithResponse($request);
            if (! $response instanceof BranchRegisterResponse) {
                throw new RuntimeException('The response object is not valid');
            }
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
            $response = $this->rmRemotingClient->sendMsgWithResponse($request);
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