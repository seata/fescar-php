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
namespace Hyperf\Seata\Rm;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Contract\ContainerInterface;
use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Seata\Logger\LoggerFactory;

class DefaultRMHandler extends AbstractRMHandler
{
    /**
     * @var array <BranchType, AbstractRMHandler>
     */
    protected array $allRMHandlers = [];

    public function __construct(LoggerFactory $loggerFactory, ConfigInterface $config, ContainerInterface $container)
    {
        parent::__construct($loggerFactory, $config);
        $this->initRMHandlers($container);
    }

    public function getBranchType(): int
    {
        throw new SeataException('DefaultRMHandler is not a real AbstractRMHandler');
    }

    protected function initRMHandlers(ContainerInterface $container)
    {
        $this->allRMHandlers = [
            BranchType::AT => $container->get(RMHandlerAT::class),
        ];
    }

    protected function getResourceManager(): ResourceManagerInterface
    {
        throw new SeataException('DefaultRMHandler is not a real AbstractRMHandler');
    }
}
