<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
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
namespace HyperfTest\Seata\Core;

use Hyperf\Seata\Core\Codec\CodecFactory;
use Hyperf\Seata\Core\Codec\CodecType;
use Hyperf\Seata\Core\Codec\Seata\MessageCodecFactory;
use Hyperf\Seata\Core\Codec\Seata\SeataCodec;
use Hyperf\Utils\ApplicationContext;
use Mockery;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;

/**
 * @internal
 * @coversNothing
 */
class CodecFactoryTest extends TestCase
{
    public function testGet()
    {
        $container = $this->getContainer();
        $codecFactory = new CodecFactory($container);
        $result = $codecFactory->get(CodecType::SEATA);

        $this->assertIsObject($result);
    }

    protected function getContainer()
    {
        $container = Mockery::mock(ContainerInterface::class);
        ApplicationContext::setContainer($container);

        $container->shouldReceive('has')->andReturn(true);
        $container->shouldReceive('get')->with(SeataCodec::class)->andReturn(new SeataCodec(new MessageCodecFactory()));

        return $container;
    }
}
