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
