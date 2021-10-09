<?php


namespace Hyperf\Seata\Logger;


interface LoggerInterface extends \Psr\Log\LoggerInterface
{

    public function setClass(string $class);

}