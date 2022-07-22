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
namespace Hyperf\Seata\Tm\Api;

class TransactionalExecutorCode
{
    /**
     * Begin failure code.
     */
    public const BeginFailure = 0;

    /**
     * Commit failure code.
     */
    public const CommitFailure = 1;

    /**
     * Rollback failure code.
     */
    public const RollbackFailure = 2;

    /**
     * Rollback done code.
     */
    public const RollbackDone = 3;

    /**
     * Report failure code.
     */
    public const ReportFailure = 4;

    /**
     * Rollback retrying code.
     */
    public const RollbackRetrying = 5;
}
