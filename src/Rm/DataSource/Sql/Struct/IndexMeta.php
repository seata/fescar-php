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

    public function setNonUnique(bool $nonUnique): IndexMeta
    {
        $this->nonUnique = $nonUnique;
        return $this;
    }

    public function getIndexQualifier(): string
    {
        return $this->indexQualifier;
    }

    public function setIndexQualifier(string $indexQualifier): IndexMeta
    {
        $this->indexQualifier = $indexQualifier;
        return $this;
    }

    public function getIndexName(): string
    {
        return $this->indexName;
    }

    public function setIndexName(string $indexName): IndexMeta
    {
        $this->indexName = $indexName;
        return $this;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): IndexMeta
    {
        $this->type = $type;
        return $this;
    }

    public function getIndextype(): int
    {
        return $this->indextype;
    }

    public function setIndextype(int $indextype): IndexMeta
    {
        $this->indextype = $indextype;
        return $this;
    }

    public function getAscOrDesc(): string
    {
        return $this->ascOrDesc;
    }

    public function setAscOrDesc(string $ascOrDesc): IndexMeta
    {
        $this->ascOrDesc = $ascOrDesc;
        return $this;
    }

    public function getCardinality(): int
    {
        return $this->cardinality;
    }

    public function setCardinality(int $cardinality): IndexMeta
    {
        $this->cardinality = $cardinality;
        return $this;
    }

    public function getOrdinalPosition(): int
    {
        return $this->ordinalPosition;
    }

    public function setOrdinalPosition(int $ordinalPosition): IndexMeta
    {
        $this->ordinalPosition = $ordinalPosition;
        return $this;
    }

    public function getValues(): array
    {
        return $this->values;
    }

    public function setValues(array $values): IndexMeta
    {
        $this->values = $values;
        return $this;
    }

    /**
     * @param mixed $values
     */
    public function addValues($values): IndexMeta
    {
        $this->values[] = $values;
        return $this;
    }
}
