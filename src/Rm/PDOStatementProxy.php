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
namespace Hyperf\Seata\Rm;

use Hyperf\Seata\Rm\DataSource\Exec\DeleteExecutor;
use Hyperf\Seata\SqlParser\Parser\ParserInterface;
use PDO;
use PDOStatement;

class PDOStatementProxy extends \PDOStatement
{
    protected PDOStatement $__object;

    protected PDOProxy $PDOProxy;

    protected ParserInterface $sqlParser;

    protected array $bindParamContext = [];

    protected array $bindColumnContext = [];

    protected array $bindValueContext = [];

    public function __construct(PDOStatement $object, PDOProxy $PDOProxy, ParserInterface $sqlParser)
    {
        $this->__object = $object;
        $this->PDOProxy = $PDOProxy;
        $this->sqlParser = $sqlParser;
    }

    public function __call(string $name, array $arguments)
    {
        return $this->__object->{$name}(...$arguments);
    }

    public function bindParam(int|string $param, mixed &$var, int $type = PDO::PARAM_INT, int $maxLength = null, mixed $driverOptions = null)
    {
        $this->bindParamContext[$param] = [$var, $type, $maxLength, $driverOptions];
        return $this->__object->bindColumn($param, $param, $type, $maxLength, $driverOptions);
    }

    public function bindColumn(int|string $column, mixed &$var, int $type = PDO::PARAM_INT, int $maxLength = null, mixed $driverOptions = null)
    {
        $this->bindColumnContext[$column] = [$var, $type, $maxLength, $driverOptions];
        return $this->__object->bindColumn($column, $param, $type, $maxLength, $driverOptions);
    }

    public function bindValue(int|string $param, mixed $value, int $type = PDO::PARAM_INT)
    {
        $this->bindValueContext[$param] = [$value, $type];
        return $this->__object->bindValue($param, $value, $type);
    }

    public function execute(?array $params = null)
    {
        if ($this->sqlParser->isDelete()) {
            $deleteExecutor = new DeleteExecutor($this->sqlParser, $this->PDOProxy, $this->bindParamContext, $this->bindColumnContext, $this->bindValueContext);
            $deleteExecutor->execute($params);
        }

        if ($this->sqlParser->isInsert()) {
        }

        if ($this->sqlParser->isInsert()) {
        }
        return parent::execute($params);
    }
}
