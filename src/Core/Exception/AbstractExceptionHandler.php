<?php


namespace Hyperf\Seata\Core\Exception;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Exception\Callbak\AbstractCallback;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequest;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionResponse;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use RuntimeException;

class AbstractExceptionHandler
{
    protected LoggerInterface $logger;

    protected ConfigInterface $config;

    public function __construct(LoggerFactory $loggerFactory, ConfigInterface $config)
    {
        $this->logger = $loggerFactory->create(static::class);
        $this->config = $config;
    }

    public function exceptionHandleTemplate(
        AbstractCallback $callback,
        AbstractTransactionRequest $request,
        AbstractTransactionResponse $response
    ) {
        try {
            $callback->execute($request, $response);
            $callback->onSuccess($request, $response);
        } catch (TransactionException $tex) {
            $this->logger->info('Catch TransactionException while do RPC, request: ' . $tex->getMessage());
            $callback->onTransactionException($request, $response, $tex);
        } catch (RuntimeException $rex) {
            $this->logger->info('Catch RuntimeException while do RPC, request:' . $rex->getMessage());
            $callback->onException($request, $response, $rex);
        }
    }


}