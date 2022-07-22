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

use Throwable;

interface FailureHandler
{
    /**
     * On begin failure.
     *
     * @param GlobalTransaction $tx the tx
     * @param Throwable $cause the cause
     */
    public function onBeginFailure(GlobalTransaction $tx, Throwable $cause);

    /**
     * On commit failure.
     *
     * @param GlobalTransaction $tx the tx
     * @param Throwable $cause the cause
     */
    public function onCommitFailure(GlobalTransaction $tx, Throwable $cause);

    /**
     * On rollback failure.
     *
     * @param GlobalTransaction $tx the tx
     * @param Throwable $originalException the originalException
     */
    public function onRollbackFailure(GlobalTransaction $tx, Throwable $originalException);

    /**
     * On rollback retrying.
     *
     * @param GlobalTransaction $tx the tx
     * @param Throwable $originalException the originalException
     */
    public function onRollbackRetrying(GlobalTransaction $tx, Throwable $originalException);
}
