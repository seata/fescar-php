<?php

namespace HyperfTest\Seata\Common;

use Hyperf\Seata\Common\PositiveCounter;
use PHPUnit\Framework\TestCase;

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
