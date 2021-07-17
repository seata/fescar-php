<?php


namespace Hyperf\Seata\Tm\Api\CheckTimerTask;


use Hyperf\Seata\Core\Model\GlobalStatus;
use Hyperf\Seata\Tm\Api\GlobalTransaction;

interface CheckTimerTaskInterface
{

    public function setTx(GlobalTransaction $tx): self;

    public function setRequired(GlobalStatus $required): self;

    public function run();

}