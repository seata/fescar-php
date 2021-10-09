<?php

namespace Hyperf\Seata\Rm\DataSource\Sql\Struct;


class IndexType
{

    /**
     * Primary index type.
     */
    const PRIMARY = 0;
    /**
     * Normal index type.
     */
    const Normal = 1;
    /**
     * Unique index type.
     */
    const Unique = 2;
    /**
     * Full text index type.
     */
    const FullText = 3;

}