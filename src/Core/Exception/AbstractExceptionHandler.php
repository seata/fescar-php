<?php


namespace Hyperf\Seata\Core\Exception;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Exception\Callbak\AbstractCallback;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequest;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionResponse;
use RuntimeException;

class AbstractExceptionHandler
{
    /**
     * @var StdoutLoggerInterface
     */
    protected $stdoutLogger;

    /**
     * @var ConfigInterface
     */
    protected $config;

    public function __construct(StdoutLoggerInterface $stdoutLogger, ConfigInterface $config)
    {
        $this->stdoutLogger = $stdoutLogger;
        $this->config = $config;
    }

    public function exceptionHandleTemplate(AbstractCallback $callback, AbstractTransactionRequest $request,AbstractTransactionResponse $response)
    {
        try {
            $callback->execute($request, $response);
            $callback->onSuccess($request, $response);
        } catch (TransactionException $tex) {
            $this->stdoutLogger->info('Catch TransactionException while do RPC, request: ' . $tex->getMessage());
            $callback->onTransactionException($request, $response, $tex);
    } catch (RuntimeException $rex) {
            $this->stdoutLogger->info('Catch RuntimeException while do RPC, request:' . $rex->getMessage());
            $callback->onException($request, $response, $rex);
    }
    }


}