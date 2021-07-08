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
namespace Hyperf\Seata\Core\Model;

class BranchType
{
    /**
     * The At.
     */
    // AT Branch
    public const AT = 1;

    /**
     * The TCC.
     */
    public const TCC = 2;
}
