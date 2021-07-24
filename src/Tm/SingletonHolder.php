<?php


namespace Hyperf\Seata\Tm;


use Hyperf\Seata\Core\Model\TransactionManager;

class SingletonHolder
{
    /**
     * @var TransactionManager
     */
    private static $instance = null;


   public static function get()
   {
       self::$instance = EnhancedServiceLoader::load(TransactionManager::class);
   }

}