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
namespace Hyperf\Seata\Core\Protocol\Transaction;

use Hyperf\Seata\Core\Model\GlobalStatus;
use Hyperf\Seata\Core\Protocol\MessageType;

class GlobalReportRequest extends AbstractGlobalEndRequest
{
    /**
     * @var GlobalStatus
     */
    protected $globalStatus;

    public function getTypeCode(): int
    {
        return MessageType::TYPE_GLOBAL_REPORT;
    }

    public function getGlobalStatus(): GlobalStatus
    {
        return $this->globalStatus;
    }

    public function setGlobalStatus(GlobalStatus $globalStatus): void
    {
        $this->globalStatus = $globalStatus;
    }
}
