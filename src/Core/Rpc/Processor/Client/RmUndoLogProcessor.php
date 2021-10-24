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
namespace Hyperf\Seata\Core\Rpc\Processor\Client;

use Exception;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Protocol\Transaction\UndoLogDeleteRequest;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;
use Hyperf\Utils\ApplicationContext;

class RmUndoLogProcessor extends AbstractRemotingProcessor
{

    private TransactionMessageHandler $handler;

    public function __construct(TransactionMessageHandler $handler)
    {
        $this->handler = $handler;
    }

    public function process($channel, RpcMessage $rpcMessage)
    {
        /** @var UndoLogDeleteRequest $msg */
        $msg = $rpcMessage->getBody();
        $this->getLogger()->info(sprintf('rm handle undo log process:%s', $msg));
        $this->handleUndoLogDelete($msg);
    }

    private function handleUndoLogDelete(UndoLogDeleteRequest $undoLogDeleteRequest)
    {
        try {
            $this->handler->onRequest($undoLogDeleteRequest, null);
        } catch (Exception $exception) {
            $this->getLogger()->error(sprintf('Failed to delete undo log by undoLogDeleteRequest on %s', $undoLogDeleteRequest->getResourceId()));
        }
    }
}
