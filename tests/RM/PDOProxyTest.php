<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace HyperfTest\Seata\RM;

use Hyperf\Seata\Rm\PDOProxy;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class PDOProxyTest extends TestCase
{
    public function testPrepare()
    {
        $refClass = new \ReflectionClass(PDOProxy::class);
        /** @var PDOProxy $pdoProxy */
        $pdoProxy = $refClass->newInstanceWithoutConstructor();

        $proxy = new PDOProxy();

//       $sql = 'SELECT * FROM table where id in (1,2,3,4,5)';
        $sql = 'updated testTables set a="A" where id in (select id from test_tables)';
        $pdoProxy->prepare($sql);
    }
}
