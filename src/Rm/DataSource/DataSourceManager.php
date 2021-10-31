<?php

namespace Hyperf\Seata\Rm\DataSource;


use Hyperf\Database\Connection;
use Hyperf\Seata\Common\AddressTarget;
use Hyperf\Seata\Core\Context\RootContext;
use Hyperf\Seata\Core\Model\Application;
use Hyperf\Seata\Core\Model\Branch;
use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Model\Resource;
use Hyperf\Seata\Core\Model\The;
use Hyperf\Seata\Core\Model\Transaction;
use Hyperf\Seata\Core\Model\TransactionException;
use Hyperf\Seata\Core\Protocol\ResultCode;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalLockQueryRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalLockQueryResponse;
use Hyperf\Seata\Core\Rpc\Runtime\RmRemotingClient;
use Hyperf\Seata\Exception\RuntimeException;
use Hyperf\Seata\Exception\TimeoutException;
use Hyperf\Seata\Exception\TransactionExceptionCode;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Seata\Rm\AbstractResourceManager;
use Hyperf\Utils\ApplicationContext;

class DataSourceManager extends AbstractResourceManager
{

    protected LoggerInterface $logger;
    protected array $dataSourceCache = [];

    public function __construct(RmRemotingClient $rmRemotingClient)
    {
        parent::__construct($rmRemotingClient);
        $container = ApplicationContext::getContainer();
        $this->logger = $container->get(LoggerFactory::class)->create(static::class);
    }

    public function lockQuery(int $branchType, string $resourceId, string $xid, string $lockKeys): bool
    {
        try {
            $request = new GlobalLockQueryRequest();
            $request->setXid($xid)->setLockKey($lockKeys)->setResourceId($resourceId);
            if (! RootContext::inGlobalTransaction() && ! RootContext::requireGlobalLock()) {
                throw new RuntimeException('Unknown situation');
            }
            $response = $this->rmRemotingClient->sendMsgWithResponse($request, AddressTarget::RM);
            if (! $response instanceof GlobalLockQueryResponse) {
                throw new RuntimeException('The response object is not valid');
            }
            if ($response->getResultCode() === ResultCode::Failed) {
                throw new TransactionException(sprintf('Response[%s]', $response->getMessage()), $response->getTransactionExceptionCode());
            } else {
                return $response->isLockable();
            }
        } catch (TimeoutException $exception) {
            throw new TransactionException('RPC Timeout', TransactionExceptionCode::IO, $exception);
        } catch (\RuntimeException $exception) {
            throw new TransactionException('BranchRegisterFailed', TransactionExceptionCode::BranchRegisterFailed, $exception);
        }
    }

    public function registerResource(Resource $resource): void
    {
        if (! $resource instanceof MysqlConnectionProxy) {
            throw new \InvalidArgumentException('Invalid data source passing');
        }
        $this->dataSourceCache[$resource->getResourceId()] = $resource;
        parent::registerResource($resource);
    }

    public function get(string $resourceId): ?MysqlConnectionProxy
    {
        return $this->dataSourceCache[$resourceId];
    }

    public function getManagedResources(): array
    {
        return $this->dataSourceCache;
    }

    public function getBranchType(): int
    {
        return BranchType::AT;
    }

    public function branchCommit(
        int $branchType,
        string $xid,
        int $branchId,
        string $resourceId,
        string $applicationData
    ): int {

    }

    public function branchRollback(
        int $branchType,
        string $xid,
        int $branchId,
        string $resourceId,
        string $applicationData
    ): int {

    }
}