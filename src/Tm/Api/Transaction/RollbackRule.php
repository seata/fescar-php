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

use Hyperf\Seata\Exception\IllegalArgumentException;
use Throwable;

class RollbackRule
{
    /**
     * @var string
     */
    private $exceptionName;

    public function __construct($exception)
    {
        if (empty($exception)) {
            throw new IllegalArgumentException("'exception' cannot be null or empty");
        }

        if (! is_string($exception) && ! $exception instanceof Throwable) {
            throw new IllegalArgumentException('"exception" cannot be ' . gettype($exception));
        }

        if (is_string($exception)) {
            $this->exceptionName = $exception;
        }

        if ($exception instanceof Throwable) {
            $this->exceptionName = get_class($exception);
        }
    }

    public function __toString()
    {
        return 'RollbackRule with pattern [' . $this->exceptionName . ']';
    }

    public function getExceptionName(): string
    {
        return $this->exceptionName;
    }

    public function getDepth(Throwable $ex, int $depth = 0)
    {
        if (get_class($ex) === $this->exceptionName) {
            return $depth;
        }

        if (get_class($ex) === Throwable::class) {
            return -1;
        }

        return $this->getDepth($ex, ++$depth);
    }

    public function hashCode()
    {
        // @todo 获取 hashCode
        return md5($this->exceptionName);
    }
}
