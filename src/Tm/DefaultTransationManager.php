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

use Hyperf\Seata\Core\Model\GlobalStatus;
use Hyperf\Seata\Core\Model\TransactionManager;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalCommitRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalCommitResponse;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalReportRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalRollbackRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalRollbackResponse;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalStatusRequest;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalStatusResponse;
use Hyperf\Seata\Core\Rpc\Swoole\TmRpcClient;
use Hyperf\Utils\ApplicationContext;

class DefaultTransationManager implements TransactionManager
{
    /**
     * @var TmRpcClient
     */
    protected $tmRpcClient;

    public function __construct(TmRpcClient $tmRpcClient)
    {
        $this->tmRpcClient = $tmRpcClient;
    }


    public function begin(?string $applicationId, ?string $transactionServiceGroup, string $name, int $timeout): string
    {
        $request = new GlobalBeginRequest();
        $request->setTransactionName($name);
        $request->setTimeout($timeout);
        /** @var GlobalBeginResponse $response */
        $response = $this->sendRequest($request);
        return $response->getXid();
    }

    public function commit(string $xid): GlobalStatus
    {
        $request = new GlobalCommitRequest();
        $request->setXid($xid);
        /** @var GlobalCommitResponse $response */
        $response = $this->sendRequest($request);
        return $response->getGlobalStatus();
    }

    public function rollback(string $xid): GlobalStatus
    {
        $request = new GlobalRollbackRequest();
        $request->setXid($xid);
        /** @var GlobalRollbackResponse $response */
        $response = $this->sendRequest($request);
        return $response->getGlobalStatus();
    }

    public function getStatus(string $xid): GlobalStatus
    {
        $request = new GlobalStatusRequest();
        $request->setXid($xid);
        /** @var GlobalStatusResponse $response */
        $response = $this->sendRequest($request);
        return $response->getGlobalStatus();
    }

    public function globalReport(string $xid, GlobalStatus $globalStatus): GlobalStatus
    {
        $globalReport = new GlobalReportRequest();
        $globalReport->setXid($xid);
        $globalReport->setGlobalStatus($globalStatus);
        return $this->sendRequest($globalReport)->getGlobalStatus();
    }

    protected function sendRequest(AbstractTransactionRequest $request)
    {
        // @TODO 处理超时状态，抛出 TransactionException
        return $this->tmRpcClient->sendMsgWithResponse($request);
    }
}
