<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Seata\Tm\Api\Transaction;

class NoRollbackRule extends RollbackRule
{
    public static $DEFAULT_NO_ROLLBACK_RULE;

    public function __construct(string $exception)
    {
        // @todo 这里需要看看是否正确的实现
        parent::__construct($exception);
        self::$DEFAULT_NO_ROLLBACK_RULE = $exception;
    }

    public function __toString()
    {
        return 'No' . parent::__toString();
    }
}
