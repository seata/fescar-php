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
namespace Hyperf\Seata\Rm\DataSource\Exec;

use Hyperf\Seata\Rm\DataSource\Sql\Struct\Field;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\KeyType;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableMeta;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableRecords;
use Hyperf\Seata\Rm\DataSource\Undo\SQLUndoLog;
use PHPSQLParser\PHPSQLCreator;

class DeleteExecutor extends BaseTransactionalExecutor
{
    public function execute(?array $params = null)
    {
        $beforeImage = $this->beforeImage();
        $res = $this->PDO->prepare($this->parser->getOriginSql());
        $result = $res->execute($params);
        $afterImage = $this->afterImage();
        $this->prepareUndoLog($beforeImage, $afterImage);
        return $result;
    }

    public function beforeImage(): TableRecords
    {
        $tableMeta = $this->getTableMeta($this->parser->getDbType());
        return $this->buildTableRecords($tableMeta);
    }

    public function prepareUndoLog(?TableRecords $beforeImages = null, ?TableRecords $afterImages = null)
    {
        if (count($beforeImages->getRows()) == 0) {
            return;
        }

        $lockKey = $this->buildLockKey($beforeImages);
        $this->PDO->appendLockKey($lockKey);

        $undoLogItems = $this->buildUndoItem($beforeImages, $afterImages);
        $this->PDO->appendUndoLog($undoLogItems);
    }

    public function afterImage(): ?TableRecords
    {
        return null;
    }

    protected function buildTableRecords(TableMeta $tableMeta): TableRecords
    {
        $parser = $this->parser->parser();
        $newParse = [];
        $newParse['SELECT'][] = [
            'expr_type' => 'colref',
            'alias' => false,
            'base_expr' => '*',
            'sub_tree' => false,
            'delim' => false,
        ];

        foreach ($parser as $k => $item) {
            $newParse[$k] = $item;
        }
        $creator = new PHPSQLCreator();
        $query = $creator->create($newParse);
        $query .= ' FOR UPDATE';
        $res = $this->PDO->prepare($query);
        foreach ($this->bindColumnContext as $key => $item) {
            $res->bindColumn($key, $item[0], $item[1], $item[2], $item[3]);
        }

        foreach ($this->bindValueContext as $key => $item) {
            $res->bindValue($key, $item[0], $item[1]);
        }

        foreach ($this->bindParamContext as $key => $item) {
            $res->bindParam($key, $item[0], $item[1], $item[2], $item[3]);
        }
        $res->execute();
        $rows = $res->fetchAll();
        return $this->buildRecords($tableMeta, $rows);
    }

    protected function buildRecords(TableMeta $tableMeta, array $queryResult): TableRecords
    {
        $tableRecords = new TableRecords();
        $tableRecords->setTableMeta($tableMeta)->setTableName($tableMeta->getTableName());
        $fields = $rows = [];
        foreach ($queryResult as $item) {
            foreach ($item as $key => $value) {
                $field = new Field();
                $field->setName($key)
                    ->setType($tableMeta->getAllColumnsWithName($key)->getDataType())
                    ->setValue($value);
                if (strtolower($key) == strtolower($tableMeta->getPkName())) {
                    $field->setKeyType(KeyType::PrimaryKey);
                }
                $fields[] = $field;
            }
            $rows[] = $fields;
        }
        $tableRecords->setRows($rows);
        return $tableRecords;
    }

    protected function buildLockKey(TableRecords $tableRecords): string
    {
        if (empty($tableRecords->getRows()) || count($tableRecords->getRows()) == 0) {
            return '';
        }

        $lockKey = $tableRecords->getTableName() . ':';

        $fields = $tableRecords->pkFields();
        $len = count($fields);
        for ($i = 0; $i < $len; ++$i) {
            $lockKey .= $fields[$i]->getName();
            if ($i < $len - 1) {
                $lockKey .= ',';
            }
        }
        return $lockKey;
    }

    protected function buildUndoItem(?TableRecords $beforeImages = null, ?TableRecords $afterImages = null): SQLUndoLog
    {
        $sqlType = $this->parser->getSqlType();
        $tableName = $this->parser->getTableName();

        $undoLog = new SQLUndoLog();
        $undoLog->setTableName($tableName)
            ->setSqlType($sqlType);
        ! empty($afterImages) && $undoLog->setAfterImage($afterImages);
        ! empty($beforeImages) && $undoLog->setAfterImage($beforeImages);
        return $undoLog;
    }
}
