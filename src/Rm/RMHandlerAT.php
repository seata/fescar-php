<?php

namespace Hyperf\Seata\Rm;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Model\BranchStatus;
use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractBranchEndRequest;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractBranchEndResponse;
use Hyperf\Seata\Core\Protocol\Transaction\UndoLogDeleteRequest;
use Hyperf\Seata\Exception\ShouldNeverHappenException;
use Hyperf\Seata\Exception\TodoException;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Rm\DataSource\DataSourceProxy;

class RMHandlerAT extends AbstractRMHandler
{

    protected const LIMIT_ROWS = 3000;
    protected DefaultResourceManager $defaultResourceManager;

    public function __construct(LoggerFactory $loggerFactory, ConfigInterface $config, DefaultResourceManager $defaultResourceManager)
    {
        parent::__construct($loggerFactory, $config);
        $this->defaultResourceManager = $defaultResourceManager;
    }


    protected function getResourceManager(): ResourceManagerInterface
    {
        return $this->defaultResourceManager->getResourceManager(BranchType::AT);
    }

    /**
     * @param UndoLogDeleteRequest $request
     * @return AbstractBranchEndResponse|null
     */
    public function handle(AbstractBranchEndRequest $request): ?AbstractBranchEndResponse
    {
        // TODO undologDeleteRequest
//        throw new TodoException();
//        if (! $request instanceof UndoLogDeleteRequest) {
//            throw new \InvalidArgumentException('Invalid object type of $request');
//        }
        $dataSourceManager = $this->getResourceManager();
        /** @var DataSourceProxy $dataSourceProxy */
        $dataSourceProxy = $dataSourceManager->get($request->getResourceId());

        if ($dataSourceProxy == null) {
            $this->logger->warning(sprintf("Failed to get dataSourceProxy for delete undolog on %", $request->getResourceId()));
            return null;
        }

        $logCreatedSave = $this->getLogCreated($request->getSaveDays());

        $conn = null;

        try {
            $conn = $dataSourceProxy->getPlainConnection();
        } catch (\Throwable $exception) {

        }
    }

    private function getLogCreated(int $saveDays): bool|int
    {
        if ($saveDays <= 0) {
            $saveDays = UndoLogDeleteRequest::DEFAULT_SAVE_DAYS;
        }

        return strtotime(sprintf('-%s days', $saveDays), time());
    }


    public function getBranchType(): int
    {
        return BranchType::AT;
    }
}