<?php

namespace Hyperf\Seata\Exception;


class SeataErrorCode
{

    /**
     * @var \string[][]
     */
    public $messages
        = [
            self::ThreadPoolFull => ["Thread pool is full", "Please check the thread pool configuration"],
            self::InitSeataClientError => [
                "Seata app name or seata server group is null",
                "Please check your configuration"
            ],
            self::NullRuleError => ["Services rules is null", "Please check your configuration"],
            self::NetConnect => [
                "Can not connect to the server",
                "Please check if the seata service is started. Is the network connection to the seata server normal?"
            ],
            self::NetRegAppname => [
                "Register client app name failed",
                "Please check if the seata service is started. Is the network connection to the seata server normal?"
            ],
            self::NetDisconnect => [
                "Seata connection closed",
                "The network is disconnected. Please check the network connection to the client or seata server."
            ],
            self::NetDispatch => [
                "Dispatch error",
                "Network processing error. Please check the network connection to the client or seata server."
            ],
            self::NetOnMessage => [
                "On message error",
                "Network processing error. Please check the network connection to the client or seata server."
            ],
            self::getChannelError => ["Get channel error", "Get channel error"],
            self::ChannelNotWritable => ["Channel not writable", "Channel not writable"],
            self::SendHalfMessageFailed => ["Send half message failed", "Send half message failed"],
            self::ChannelIsNotWritable => ["Channel is not writable", "Channel is not writable"],
            self::NoAvailableService => ["No available service", "No available service"],
            self::InvalidConfiguration => ["Invalid configuration", "Invalid configuration"],
            self::ExceptionCaught => ["Exception caught", "Exception caught"],
            self::RegisterRM => ["Register RM failed", "Register RM failed"],
            self::UnknownAppError => ["Unknown error", "Internal error"],
        ];

    /**
     * 0001 ~ 0099  Configuration related errors
     */
    const ThreadPoolFull = '0004';

    /**
     * The Init services client error.
     */
    const InitSeataClientError = "0008";

    /**
     * The Null rule error.
     */
    const NullRuleError = "0010";

    /**
     * 0101 ~ 0199 Network related errorconst . (Not connected, disconnected, dispatched, etc.)
     */
    const NetConnect = "0101";

    /**
     * The Net reg appname.
     */
    const NetRegAppname = "0102";

    /**
     * The Net disconnect.
     */
    const NetDisconnect = "0103";

    /**
     * The Net dispatch.
     */
    const NetDispatch = "0104";

    /**
     * The Net on message.
     */
    const NetOnMessage = "0105";
    /**
     * Get channel error framework error code.
     */
    const getChannelError = "0106";

    /**
     * Channel not writable framework error code.
     */
    const ChannelNotWritable = "0107";

    /**
     * Send half message failed framework error code.
     */
    const SendHalfMessageFailed = "0108";

    /**
     * Channel is not writable framework error code.
     */
    const ChannelIsNotWritable = "0109";
    /**
     * No available service framework error code.
     */
    const NoAvailableService = "0110";

    /**
     * Invalid configuration framework error code.
     */
    const InvalidConfiguration = "0201";

    /**
     * Exception caught framework error code.
     */
    const ExceptionCaught = "0318";

    /**
     * Register rm framework error code.
     */
    const RegisterRM = "0304";

    /**
     * Undefined error
     */
    const UnknownAppError = "10000";

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

    public function __toString()
    {
        return sprintf("[%s] [%s] [%s]", $this->errCode, $this->errMessage, $this->errDispose);
    }


}