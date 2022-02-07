<?php

namespace HyperfTest\Seata\RM;

use Hyperf\Seata\Rm\PDOProxy;
use PHPUnit\Framework\TestCase;

class PDOProxyTest extends TestCase
{
    public function testPrepare()
    {
       $refClass = new \ReflectionClass(PDOProxy::class);
       /** @var PDOProxy $pdoProxy */
       $pdoProxy =  $refClass->newInstanceWithoutConstructor();

       $proxy = new PDOProxy();

//       $sql = 'SELECT * FROM table where id in (1,2,3,4,5)';
       $sql = 'updated testTables set a="A" where id in (select id from test_tables)';
        $pdoProxy->prepare($sql);
    }

}