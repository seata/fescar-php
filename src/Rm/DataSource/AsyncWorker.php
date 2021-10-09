<?php

namespace Hyperf\Rm\DataSource;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Engine\Channel;
use Hyperf\Seata\Core\Model\BranchStatus;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Seata\Rm\DataSource\DataSourceManager;
use Hyperf\Utils\Coroutine;
use seata\src\Rm\DataSource\Phase2Context;
use SplQueue;

class AsyncWorker
{

    protected LoggerInterface $logger;
    protected const DEFAULT_RESOURCE_SIZE = 16;
    protected const UNDOLOG_DELETE_LIMIT_SIZE = 1000;
    protected int $asyncCommitBufferLimit;
    protected ConfigInterface $config;
    protected DataSourceManager $dataSourceManager;
    protected Channel $commitChannel;
    protected int $parallelLimit = 2;

    public function __construct(LoggerFactory $loggerFactory, ConfigInterface $config, DataSourceManager $dataSourceManager)
    {
        $this->logger = $loggerFactory->create(static::class);
        $this->config = $config;
        $this->dataSourceManager = $dataSourceManager;
        $this->asyncCommitBufferLimit = $config->get('seata.client.rm.async_commit_buffer_limit', 10000);
        $this->commitChannel = new Channel($this->asyncCommitBufferLimit);
        $this->logger->info('Async Commit Buffer Limit: %d', $this->asyncCommitBufferLimit);
        $this->initAsyncWorkerCoroutine();
    }

    public function branchCommit(string $xid, int $branchId, string $resourceId): int
    {
        $context = new Phase2Context($xid, $branchId, $resourceId);
        $this->addToCommitQueue($context);
        return BranchStatus::PhaseTwo_Committed;
    }

    protected function addToCommitQueue(Phase2Context $context)
    {
        $this->asyncWorkerCoroutineChannel->push($context);
    }

    protected function doBranchCommitSafely()
    {
        try {
            $this->doBranchCommit();
        } catch (\Throwable $exception) {
            $this->logger->error(sprintf('Exception occur when doing branch commit: %s', $exception->getMessage()));
        }
    }

    protected function initAsyncWorkerCoroutine(): int
    {
        return Coroutine::create(function () {
            // 协程下通过 Channel 获取入队的 Context，不做 ResourceId 分组，单条处理
            while ($context = $this->commitChannel->pop()) {
                if (! $context instanceof Phase2Context) {
                    continue;
                }
                $dataSourceProxy = $this->dataSourceManager->get($context->getResourceId());
                if (! $dataSourceProxy) {
                    $this->logger->warning(sprintf('Failed to find resource for %s', $context->getResourceId()));
                } else {
                    $conn = $dataSourceProxy->getPdo();
                }
            }
        });
    }

}