<?php

namespace Hyperf\Seata\Common;


class Constants
{

    /**
     * The constant IP_PORT_SPLIT_CHAR.
     */
    public const IP_PORT_SPLIT_CHAR = ":";
    /**
     * The constant CLIENT_ID_SPLIT_CHAR.
     */
    public const CLIENT_ID_SPLIT_CHAR = ":";
    /**
     * The constant ENDPOINT_BEGIN_CHAR.
     */
    public const ENDPOINT_BEGIN_CHAR = "/";
    /**
     * The constant DBKEYS_SPLIT_CHAR.
     */
    public const DBKEYS_SPLIT_CHAR = ",";

    /** the start time of transaction */
    public const START_TIME  = "start-time";

    /**
     * app name
     */
    public const APP_NAME = "appName";

    /**
     * TCC start time
     */
    public const ACTION_START_TIME = "action-start-time";

    /**
     * TCC name
     */
    public const ACTION_NAME = "actionName";

    /**
     * phase one method name
     */
    public const PREPARE_METHOD = "sys::prepare";

    /**
     * phase two commit method name
     */
    public const COMMIT_METHOD = "sys::commit";

    /**
     * phase two rollback method name
     */
    public const ROLLBACK_METHOD = "sys::rollback";

    /**
     * host ip
     */
    public const HOST_NAME = "host-name";

    /**
     * The constant TCC_METHOD_RESULT.
     */
    public const TCC_METHOD_RESULT = "result";

    /**
     * The constant TCC_METHOD_ARGUMENTS.
     */
    public const TCC_METHOD_ARGUMENTS = "arguments";

    /**
     * transaction context
     */
    public const TCC_ACTIVITY_CONTEXT = "activityContext";

    /**
     * branch context
     */
    public const TCC_ACTION_CONTEXT = "actionContext";

    /**
     * default charset name
     */
    public const DEFAULT_CHARSET_NAME = "UTF-8";

}