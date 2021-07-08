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
namespace Hyperf\Seata\Exception;

class SeataErrorCode
{
    /**
     * 0001 ~ 0099  Configuration related errors.
     */
    public const ThreadPoolFull = '0004';

    /**
     * The Init services client error.
     */
    public const InitSeataClientError = '0008';

    /**
     * The Null rule error.
     */
    public const NullRuleError = '0010';

    /**
     * 0101 ~ 0199 Network related errorconst . (Not connected, disconnected, dispatched, etc.).
     */
    public const NetConnect = '0101';

    /**
     * The Net reg appname.
     */
    public const NetRegAppname = '0102';

    /**
     * The Net disconnect.
     */
    public const NetDisconnect = '0103';

    /**
     * The Net dispatch.
     */
    public const NetDispatch = '0104';

    /**
     * The Net on message.
     */
    public const NetOnMessage = '0105';

    /**
     * Get channel error framework error code.
     */
    public const getChannelError = '0106';

    /**
     * Channel not writable framework error code.
     */
    public const ChannelNotWritable = '0107';

    /**
     * Send half message failed framework error code.
     */
    public const SendHalfMessageFailed = '0108';

    /**
     * Channel is not writable framework error code.
     */
    public const ChannelIsNotWritable = '0109';

    /**
     * No available service framework error code.
     */
    public const NoAvailableService = '0110';

    /**
     * Invalid configuration framework error code.
     */
    public const InvalidConfiguration = '0201';

    /**
     * Exception caught framework error code.
     */
    public const ExceptionCaught = '0318';

    /**
     * Register rm framework error code.
     */
    public const RegisterRM = '0304';

    /**
     * Undefined error.
     */
    public const UnknownAppError = '10000';

    /**
     * @var \string[][]
     */
    public $messages
        = [
            self::ThreadPoolFull => ['Thread pool is full', 'Please check the thread pool configuration'],
            self::InitSeataClientError => [
                'Seata app name or seata server group is null',
                'Please check your configuration',
            ],
            self::NullRuleError => ['Services rules is null', 'Please check your configuration'],
            self::NetConnect => [
                'Can not connect to the server',
                'Please check if the seata service is started. Is the network connection to the seata server normal?',
            ],
            self::NetRegAppname => [
                'Register client app name failed',
                'Please check if the seata service is started. Is the network connection to the seata server normal?',
            ],
            self::NetDisconnect => [
                'Seata connection closed',
                'The network is disconnected. Please check the network connection to the client or seata server.',
            ],
            self::NetDispatch => [
                'Dispatch error',
                'Network processing error. Please check the network connection to the client or seata server.',
            ],
            self::NetOnMessage => [
                'On message error',
                'Network processing error. Please check the network connection to the client or seata server.',
            ],
            self::getChannelError => ['Get channel error', 'Get channel error'],
            self::ChannelNotWritable => ['Channel not writable', 'Channel not writable'],
            self::SendHalfMessageFailed => ['Send half message failed', 'Send half message failed'],
            self::ChannelIsNotWritable => ['Channel is not writable', 'Channel is not writable'],
            self::NoAvailableService => ['No available service', 'No available service'],
            self::InvalidConfiguration => ['Invalid configuration', 'Invalid configuration'],
            self::ExceptionCaught => ['Exception caught', 'Exception caught'],
            self::RegisterRM => ['Register RM failed', 'Register RM failed'],
            self::UnknownAppError => ['Unknown error', 'Internal error'],
        ];

    /**
     * The Err code.
     */
    private $errCode = '';

    /**
     * The Err message.
     */
    private $errMessage = '';

    /**
     * The Err dispose.
     */
    private $errDispose = '';

    public function __construct(string $errCode)
    {
        $this->errCode = $errCode;
        $this->errMessage = $this->messages[$errCode][0] ?? '';
        $this->errDispose = $this->messages[$errCode][1] ?? '';
    }

    public function __toString()
    {
        return sprintf('[%s] [%s] [%s]', $this->errCode, $this->errMessage, $this->errDispose);
    }

    public function getErrCode(): string
    {
        return $this->errCode;
    }

    public function getErrMessage(): string
    {
        return $this->errMessage;
    }

    public function getErrDispose(): string
    {
        return $this->errDispose;
    }
}
