<?php

namespace Hyperf\Seata\Rm\DataSource\Sql\Struct;


class Row
{

    /**
     * @var Field[]
     */
    private $fields = [];

    /**
     * @return Field[]
     */
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