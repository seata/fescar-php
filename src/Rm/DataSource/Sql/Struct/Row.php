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

class Row
{
    /**
     * @var Field[]
     */
    private $fields = [];

    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @param \Hyperf\Seata\Rm\DataSource\Sql\Struct\Field[] $fields
     * @return Row
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }
}
