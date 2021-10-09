<?php


namespace Hyperf\Seata\Rm;


use Hyperf\Seata\Common\EnhancedServiceLoader;
use Hyperf\Seata\Core\Model\ResourceManager;

class DefaultRMHandler extends AbstractRMHandler
{

    /**
     * @var array <BranchType, AbstractRMHandler>
     */
    protected static $allRMHandlers = [];



    protected function initRMHandlers()
    {
    }

    public static function get(): DefaultRMHandler
    {
        return SingletonHolder::$INSTANCE;
    }

    protected function getResourceManager(): ResourceManager
    {
        // TODO: Implement getResourceManager() method.
    }

}