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
namespace Hyperf\Seata\Core\Protocol;

use Hyperf\Seata\Exception\ExecutionException;
use Hyperf\Seata\Exception\ShouldNeverHappenException;
use Hyperf\Utils\Exception\TimeoutException;
use RuntimeException;
use Throwable;

class MessageFuture
{
    /**
     * @var RpcMessage
     */
    private $requestMessage;

    private $timeout;

    private $start;

    private $origin;

    public function __invoke()
    {
        $this->start = time();
    }

    public function isTimeout(): bool
    {
        return time() - $this->start > $this->timeout;
    }

    public function get(int $timeout, $unit)
    {
        try {
            $result = $this->origin->get($timeout, $unit);
        } catch (ExecutionException $exception) {
            throw new ShouldNeverHappenException('Should not get results in a multi-threaded environment', $exception->getCode());
        } catch (TimeoutException $exception) {
            throw new TimeoutException('cost ' . (time() - $this->start) . ' ms');
        }

        if ($result instanceof RuntimeException) {
            throw $result;
        }
        if ($result instanceof Throwable) {
            throw new RuntimeException($result);
        }
        return $result;
    }

    public function getRequestMessage(): RpcMessage
    {
        return $this->requestMessage;
    }

    public function setRequestMessage(RpcMessage $requestMessage): void
    {
        $this->requestMessage = $requestMessage;
    }

    /**
     * @return mixed
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param mixed $timeout
     */
    public function setTimeout($timeout): void
    {
        $this->timeout = $timeout;
    }

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param mixed $start
     */
    public function setStart($start): void
    {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param mixed $origin
     */
    public function setOrigin($origin): void
    {
        $this->origin = $origin;
    }
}
