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
namespace Hyperf\Seata\Tm\Api;

class GlobalTransactionRole
{
    /**
     * The one begins the current global Transaction.
     */
    const Launcher = 1;

    /**
     * The one just joins into a existing global Transaction.
     */
    const Participant = 2;

    /**
     * @var int
     */
    private $role;

    public function __construct($role)
    {
        $this->role = $role;
    }

    public function getRole(): int
    {
        return $this->role;
    }

    public function setRole(int $role): void
    {
        $this->role = $role;
    }
}
