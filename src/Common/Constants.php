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
namespace Hyperf\Seata\Common;

class Constants
{
    /**
     * The constant IP_PORT_SPLIT_CHAR.
     */
    public const IP_PORT_SPLIT_CHAR = ':';

    /**
     * The constant CLIENT_ID_SPLIT_CHAR.
     */
    public const CLIENT_ID_SPLIT_CHAR = ':';

    /**
     * The constant ENDPOINT_BEGIN_CHAR.
     */
    public const ENDPOINT_BEGIN_CHAR = '/';

    /**
     * The constant DBKEYS_SPLIT_CHAR.
     */
    public const DBKEYS_SPLIT_CHAR = ',';

    /**
     * The start time of transaction.
     */
    public const START_TIME = 'start-time';

    /**
     * app name.
     */
    public const APP_NAME = 'appName';

    /**
     * TCC start time.
     */
    public const ACTION_START_TIME = 'action-start-time';

    /**
     * TCC name.
     */
    public const ACTION_NAME = 'actionName';

    /**
     * Phase one method name.
     */
    public const PREPARE_METHOD = 'sys::prepare';

    /**
     * Phase two commit method name.
     */
    public const COMMIT_METHOD = 'sys::commit';

    /**
     * Phase two rollback method name.
     */
    public const ROLLBACK_METHOD = 'sys::rollback';

    /**
     * Host IP.
     */
    public const HOST_NAME = 'host-name';

    /**
     * The constant TCC_METHOD_RESULT.
     */
    public const TCC_METHOD_RESULT = 'result';

    /**
     * The constant TCC_METHOD_ARGUMENTS.
     */
    public const TCC_METHOD_ARGUMENTS = 'arguments';

    /**
     * Transaction context.
     */
    public const TCC_ACTIVITY_CONTEXT = 'activityContext';

    /**
     * Branch context.
     */
    public const TCC_ACTION_CONTEXT = 'actionContext';

    /**
     * Default charset name.
     */
    public const DEFAULT_CHARSET_NAME = 'UTF-8';
}
