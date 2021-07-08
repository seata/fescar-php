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
namespace Hyperf\Seata\Rm;

use Hyperf\Seata\Core\Model\Resource;
use Hyperf\Seata\Core\Model\ResourceManager;
use Hyperf\Seata\Core\Protocol\Transaction\BranchRegisterRequest;
use Hyperf\Seata\Exception\TransactionException;
use Hyperf\Seata\Exception\TransactionExceptionCode;
use RuntimeException;

abstract class AbstractResourceManager implements ResourceManager
{
    /**
     * @var \Hyperf\Seata\Core\Rpc\Swoole\RmRpcClient
     */
    protected $rmRpcClient;

    public function registerResource(Resource $resource): void
    {
    }

    public function unregisterResource(Resource $resource): void
    {
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

            $response = $this->rmRpcClient->sendMsgWithResponse($request);
            if (! $response->getResultCode()) {
                throw new TransactionException(sprintf('Response[%s]', $response->getMsg()), $response->getTransactionExceptionCode());
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
    }

    public function lockQuery(int $branchType, string $resourceId, string $xid, string $lockKeys): bool
    {
        return false;
    }
}
