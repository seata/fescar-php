<?php

namespace Hyperf\Seata\Rm;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractBranchEndRequest;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractBranchEndResponse;
use Hyperf\Seata\Core\Protocol\Transaction\UndoLogDeleteRequest;
use Hyperf\Seata\Exception\TodoException;
use Hyperf\Seata\Logger\LoggerFactory;

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

    public function handle(AbstractBranchEndRequest $request): AbstractBranchEndResponse
    {
        throw new TodoException();
        if (! $request instanceof UndoLogDeleteRequest) {
            throw new \InvalidArgumentException('Invalid object type of $request');
        }
        
    }


    public function getBranchType(): int
    {
        return BranchType::AT;
    }
}