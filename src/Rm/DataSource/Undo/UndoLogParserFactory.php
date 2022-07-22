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
namespace Hyperf\Seata\Rm\DataSource\Undo;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Contract\ContainerInterface;
use Hyperf\Seata\Rm\DataSource\Undo\Parser\JsonUndoLogParser;

class UndoLogParserFactory
{
    protected array $parsers = [
        'json' => JsonUndoLogParser::class,
    ];

    protected string $defaultParser;

    protected ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $config = $container->get(ConfigInterface::class);
        $this->defaultParser = $config->get('seata.client.undo.log_serialization', 'json');
    }

    public function getDefaultParser(): UndoLogParser
    {
        return $this->container->get($this->parsers[$this->defaultParser]);
    }
}
