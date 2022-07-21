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
namespace HyperfTest\Seata\Common;

use Hyperf\Seata\Common\PositiveCounter;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class PositiveCounterTest extends TestCase
{
    public function testGetAndIncrement()
    {
        $int = PositiveCounter::getAndIncrement();
        $this->assertSame(0, $int);
    }

    public function testIncrementAndGet()
    {
    }
}
