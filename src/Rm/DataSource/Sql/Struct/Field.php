<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Rm\DataSource\Sql\Struct;

class Field
{
    /**
     * The Name.
     */
    private $name = '';

    /**
     * @var int
     * @see \Hyperf\Seata\Rm\DataSource\Sql\Struct\KeyType
     */
    private $keyType = KeyType::Null;

    /**
     * The Type.
     * @var int
     */
    private $type;

    /**
     * The Value.
     * @var object
     */
    private $value;

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Field
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getKeyType(): int
    {
        return $this->keyType;
    }

    /**
     * @param int $keyType
     * @return Field
     */
    public function setKeyType($keyType)
    {
        $this->keyType = $keyType;
        return $this;
    }

    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Field
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getValue(): object
    {
        return $this->value;
    }

    /**
     * @param object $value
     * @return Field
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
