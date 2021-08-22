<?php


namespace Hyperf\Seata\Rm;


use Hyperf\Utils\ApplicationContext;

class SingletonHolder
{
    public static $INSTANCE;

    /**
     * SingletonHolder constructor.
     */
    public function __construct()
    {
        self::$INSTANCE = ApplicationContext::getContainer()->get(DefaultRMHandler::class);
    }


}