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

class ColumnMeta
{
    /**
     * @var string
     */
    private $tableCat = '';

    /**
     * @var string
     */
    private $tableSchemaName = '';

    /**
     * @var string
     */
    private $tableName = '';

    /**
     * @var string
     */
    private $columnName = '';

    /**
     * @var int
     */
    private $dataType;

    /**
     * @var string
     */
    private $dataTypeName = '';

    /**
     * @var int
     */
    private $columnSize;

    /**
     * @var int
     */
    private $decimalDigits;

    /**
     * @var int
     */
    private $numPrecRadix;

    /**
     * @var int
     */
    private $nullAble;

    /**
     * @var string
     */
    private $remarks = '';

    /**
     * @var string
     */
    private $columnDef = '';

    /**
     * @var int
     */
    private $sqlDataType;

    /**
     * @var int
     */
    private $sqlDatetimeSub;

    /**
     * @var int
     */
    private $charOctetLength;

    /**
     * @var int
     */
    private $ordinalPosition;

    /**
     * @var string
     */
    private $isNullAble = '';

    /**
     * @var string
     */
    private $isAutoincrement = '';

    public function getTableCat(): string
    {
        return $this->tableCat;
    }

    /**
     * @param string $tableCat
     * @return ColumnMeta
     */
    public function setTableCat($tableCat)
    {
        $this->tableCat = $tableCat;
        return $this;
    }

    public function getTableSchemaName(): string
    {
        return $this->tableSchemaName;
    }

    /**
     * @param string $tableSchemaName
     * @return ColumnMeta
     */
    public function setTableSchemaName($tableSchemaName)
    {
        $this->tableSchemaName = $tableSchemaName;
        return $this;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     * @return ColumnMeta
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
        return $this;
    }

    public function getColumnName(): string
    {
        return $this->columnName;
    }

    /**
     * @param string $columnName
     * @return ColumnMeta
     */
    public function setColumnName($columnName)
    {
        $this->columnName = $columnName;
        return $this;
    }

    public function getDataType(): int
    {
        return $this->dataType;
    }

    /**
     * @param int $dataType
     * @return ColumnMeta
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
        return $this;
    }

    public function getDataTypeName(): string
    {
        return $this->dataTypeName;
    }

    /**
     * @param string $dataTypeName
     * @return ColumnMeta
     */
    public function setDataTypeName($dataTypeName)
    {
        $this->dataTypeName = $dataTypeName;
        return $this;
    }

    public function getColumnSize(): int
    {
        return $this->columnSize;
    }

    /**
     * @param int $columnSize
     * @return ColumnMeta
     */
    public function setColumnSize($columnSize)
    {
        $this->columnSize = $columnSize;
        return $this;
    }

    public function getDecimalDigits(): int
    {
        return $this->decimalDigits;
    }

    /**
     * @param int $decimalDigits
     * @return ColumnMeta
     */
    public function setDecimalDigits($decimalDigits)
    {
        $this->decimalDigits = $decimalDigits;
        return $this;
    }

    public function getNumPrecRadix(): int
    {
        return $this->numPrecRadix;
    }

    /**
     * @param int $numPrecRadix
     * @return ColumnMeta
     */
    public function setNumPrecRadix($numPrecRadix)
    {
        $this->numPrecRadix = $numPrecRadix;
        return $this;
    }

    public function getNullAble(): int
    {
        return $this->nullAble;
    }

    /**
     * @param int $nullAble
     * @return ColumnMeta
     */
    public function setNullAble($nullAble)
    {
        $this->nullAble = $nullAble;
        return $this;
    }

    public function getRemarks(): string
    {
        return $this->remarks;
    }

    /**
     * @param string $remarks
     * @return ColumnMeta
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

    public function getColumnDef(): string
    {
        return $this->columnDef;
    }

    /**
     * @param string $columnDef
     * @return ColumnMeta
     */
    public function setColumnDef($columnDef)
    {
        $this->columnDef = $columnDef;
        return $this;
    }

    public function getSqlDataType(): int
    {
        return $this->sqlDataType;
    }

    /**
     * @param int $sqlDataType
     * @return ColumnMeta
     */
    public function setSqlDataType($sqlDataType)
    {
        $this->sqlDataType = $sqlDataType;
        return $this;
    }

    public function getSqlDatetimeSub(): int
    {
        return $this->sqlDatetimeSub;
    }

    /**
     * @param int $sqlDatetimeSub
     * @return ColumnMeta
     */
    public function setSqlDatetimeSub($sqlDatetimeSub)
    {
        $this->sqlDatetimeSub = $sqlDatetimeSub;
        return $this;
    }

    public function getCharOctetLength(): int
    {
        return $this->charOctetLength;
    }

    /**
     * @param int $charOctetLength
     * @return ColumnMeta
     */
    public function setCharOctetLength($charOctetLength)
    {
        $this->charOctetLength = $charOctetLength;
        return $this;
    }

    public function getOrdinalPosition(): int
    {
        return $this->ordinalPosition;
    }

    /**
     * @param int $ordinalPosition
     * @return ColumnMeta
     */
    public function setOrdinalPosition($ordinalPosition)
    {
        $this->ordinalPosition = $ordinalPosition;
        return $this;
    }

    public function getIsNullAble(): string
    {
        return $this->isNullAble;
    }

    /**
     * @param string $isNullAble
     * @return ColumnMeta
     */
    public function setIsNullAble($isNullAble)
    {
        $this->isNullAble = $isNullAble;
        return $this;
    }

    public function getIsAutoincrement(): string
    {
        return $this->isAutoincrement;
    }

    /**
     * @param string $isAutoincrement
     * @return ColumnMeta
     */
    public function setIsAutoincrement($isAutoincrement)
    {
        $this->isAutoincrement = $isAutoincrement;
        return $this;
    }
}
