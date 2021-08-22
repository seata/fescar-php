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
namespace Hyperf\Seata\Core\Rpc\Processor;

use Hyperf\Seata\Core\Protocol\RpcMessage;

interface RemotingProcessorInterface
{
    /**
     * Process message.
     *
     * @param rpcMessage rpc message
     */
    public function process($channel, RpcMessage $rpcMessage);
}
