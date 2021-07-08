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
namespace Hyperf\Seata\Rm\DataSource\Sql\Struct;

class IndexType
{
    /**
     * Primary index type.
     */
    public const PRIMARY = 0;

    /**
     * Normal index type.
     */
    public const Normal = 1;

    /**
     * Unique index type.
     */
    public const Unique = 2;

    /**
     * Full text index type.
     */
    public const FullText = 3;
}
