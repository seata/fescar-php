<?php


namespace Hyperf\Seata\Rm;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Contract\ContainerInterface;
use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Seata\Logger\LoggerFactory;

class DefaultRMHandler extends AbstractRMHandler
{

    /**
     * @var array <BranchType, AbstractRMHandler>
     */
    protected array $allRMHandlers = [];

    public function __construct(LoggerFactory $loggerFactory, ConfigInterface $config, ContainerInterface $container)
    {
        parent::__construct($loggerFactory, $config);
        $this->initRMHandlers($container);
    }

    protected function initRMHandlers(ContainerInterface $container)
    {
        $this->allRMHandlers = [
            BranchType::AT => $container->get(RMHandlerAT::class),
        ];
    }

    protected function getResourceManager(): ResourceManagerInterface
    {
        throw new SeataException('DefaultRMHandler is not a real AbstractRMHandler');
    }

    public function getBranchType(): int
    {
        throw new SeataException('DefaultRMHandler is not a real AbstractRMHandler');
    }
}