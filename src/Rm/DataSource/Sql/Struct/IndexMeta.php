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

class IndexMeta
{
    /**
     * @var array
     */
    private $values = [];

    /**
     * @var int
     */
    private $indextype;

    public function getIndextype(): int
    {
        return $this->indextype;
    }

    /**
     * @param int $indextype
     * @return IndexMeta
     */
    public function setIndextype($indextype)
    {
        $this->indextype = $indextype;
        return $this;
    }

    /**
     * @return ColumnMeta[]
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @param array $values
     * @return IndexMeta
     */
    public function setValues($values)
    {
        $this->values = $values;
        return $this;
    }
}
