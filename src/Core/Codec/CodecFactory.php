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
namespace Hyperf\Seata\Core\Codec;

use Hyperf\Seata\Core\Codec\Seata\SeataCodec;
use Hyperf\Seata\Exception\SeataException;
use Psr\Container\ContainerInterface;

class CodecFactory
{
    protected array $codecs = [
        CodecType::SEATA => SeataCodec::class,
    ];

    protected ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function get($codec): CodecInterface
    {
        if (! isset($this->codecs[$codec])) {
            throw new SeataException('Codec not found');
        }
        $class = $this->codecs[$codec];
        return $this->container->get($class);
    }
}
