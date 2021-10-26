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
namespace Hyperf\Seata\Tm\Api\CheckTimerTask;

use Hyperf\Seata\Core\Model\GlobalStatus;
use Hyperf\Seata\Tm\Api\GlobalTransaction;

interface CheckTimerTaskInterface
{
    public function setTx(GlobalTransaction $tx): self;

    public function setRequired(GlobalStatus $required): self;

    public function run();
}
