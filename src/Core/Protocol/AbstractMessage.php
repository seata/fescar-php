<?php

namespace Hyperf\Seata\Core\Protocol;


use Hyperf\Seata\Common\Constants;

abstract class AbstractMessage implements MessageTypeAware
{

    protected const serialVersionUID = -1441020418526899889;

    /**
     * The constant UTF8.
     */
    protected const UTF8 = Constants::DEFAULT_CHARSET_NAME;

}