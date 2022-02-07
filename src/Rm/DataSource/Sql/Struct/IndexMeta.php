<?php

namespace Hyperf\Seata\Rm\DataSource\Sql\Struct;


class IndexMeta
{

    private bool $nonUnique;
    private String $indexQualifier;
    private String $indexName;
    private int $type;
    private int $indextype;
    private String $ascOrDesc;
    private int $cardinality;
    private int $ordinalPosition;

    private array $values;

    public function isNonUnique(): bool
    {
        return $this->nonUnique;
    }

    /**
     * @param bool $nonUnique
     */
    public function setNonUnique(bool $nonUnique): IndexMeta
    {
        $this->nonUnique = $nonUnique;
        return $this;
    }

    public function getIndexQualifier(): string
    {
        return $this->indexQualifier;
    }

    /**
     * @param String $indexQualifier
     */
    public function setIndexQualifier(string $indexQualifier): IndexMeta
    {
        $this->indexQualifier = $indexQualifier;
        return $this;
    }

    public function getIndexName(): string
    {
        return $this->indexName;
    }

    /**
     * @param String $indexName
     *
     */
    public function setIndexName(string $indexName): IndexMeta
    {
        $this->indexName = $indexName;
        return $this;
    }

    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     *
     */
    public function setType(int $type): IndexMeta
    {
        $this->type = $type;
        return $this;
    }

    /**
     */
    public function getIndextype(): int
    {
        return $this->indextype;
    }

    /**
     * @param int $indextype
     */
    public function setIndextype(int $indextype): IndexMeta
    {
        $this->indextype = $indextype;
        return $this;
    }


    public function getAscOrDesc(): string
    {
        return $this->ascOrDesc;
    }

    /**
     * @param String $ascOrDesc
     *
     */
    public function setAscOrDesc(string $ascOrDesc): IndexMeta
    {
        $this->ascOrDesc = $ascOrDesc;
        return $this;
    }


    public function getCardinality(): int
    {
        return $this->cardinality;
    }

    /**
     * @param int $cardinality
     *
     */
    public function setCardinality(int $cardinality): IndexMeta
    {
        $this->cardinality = $cardinality;
        return $this;
    }

    /**
     *
     */
    public function getOrdinalPosition(): int
    {
        return $this->ordinalPosition;
    }

    /**
     * @param int $ordinalPosition
     *
     */
    public function setOrdinalPosition(int $ordinalPosition): IndexMeta
    {
        $this->ordinalPosition = $ordinalPosition;
        return $this;
    }

    /**
     *
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @param array $values
     *
     */
    public function setValues(array $values): IndexMeta
    {
        $this->values = $values;
        return $this;
    }

    /**
     *
     */
    public function addValues($values): IndexMeta
    {
        $this->values[] = $values;
        return $this;
    }




}