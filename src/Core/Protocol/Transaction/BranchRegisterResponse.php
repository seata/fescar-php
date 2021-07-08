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

use Hyperf\Seata\Core\Protocol\MessageType;

class BranchRegisterResponse extends AbstractTransactionResponse
{
    /**
     * @var string
     */
    protected $branchId;

    public function getTypeCode(): int
    {
        return MessageType::TYPE_BRANCH_REGISTER_RESULT;
    }

    public function getBranchId(): string
    {
        return $this->branchId;
    }

    /**
     * @return $this
     */
    public function setBranchId(string $branchId)
    {
        $this->branchId = $branchId;
        return $this;
    }
}
