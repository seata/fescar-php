<?php


namespace Hyperf\Seata\Core\Protocol;


interface MessageTypeAware
{

    /**
     * Return the message type
     */
    public function getTypeCode(): int;

}