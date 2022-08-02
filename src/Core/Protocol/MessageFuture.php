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
