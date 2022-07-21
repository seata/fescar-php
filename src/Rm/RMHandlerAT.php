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
namespace Hyperf\Seata\Rm;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractBranchEndRequest;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractBranchEndResponse;
use Hyperf\Seata\Core\Protocol\Transaction\UndoLogDeleteRequest;
use Hyperf\Seata\Exception\TodoException;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Rm\DataSource\DataSourceProxy;

class RMHandlerAT extends AbstractRMHandler
{
    protected const LIMIT_ROWS = 3000;

    protected DefaultResourceManager $defaultResourceManager;

    public function __construct(LoggerFactory $loggerFactory, ConfigInterface $config, DefaultResourceManager $defaultResourceManager)
    {
        parent::__construct($loggerFactory, $config);
        $this->defaultResourceManager = $defaultResourceManager;
    }

    /**
     * @param UndoLogDeleteRequest $request
     */
    public function handle(AbstractBranchEndRequest $request): ?AbstractBranchEndResponse
    {
        // TODO undologDeleteRequest
//        throw new TodoException();
//        if (! $request instanceof UndoLogDeleteRequest) {
//            throw new \InvalidArgumentException('Invalid object type of $request');
//        }
        $dataSourceManager = $this->getResourceManager();
        /** @var DataSourceProxy $dataSourceProxy */
        $dataSourceProxy = $dataSourceManager->get($request->getResourceId());

        if ($dataSourceProxy == null) {
            $this->logger->warning(sprintf('Failed to get dataSourceProxy for delete undolog on %', $request->getResourceId()));
            return null;
        }

        $logCreatedSave = $this->getLogCreated($request->getSaveDays());

        $conn = null;

        try {
            $conn = $dataSourceProxy->getPlainConnection();
        } catch (\Throwable $exception) {
        }
    }

    public function getBranchType(): int
    {
        return BranchType::AT;
    }

    protected function getResourceManager(): ResourceManagerInterface
    {
        return $this->defaultResourceManager->getResourceManager(BranchType::AT);
    }

    private function getLogCreated(int $saveDays): bool|int
    {
        if ($saveDays <= 0) {
            $saveDays = UndoLogDeleteRequest::DEFAULT_SAVE_DAYS;
        }

        return strtotime(sprintf('-%s days', $saveDays), time());
    }
}
