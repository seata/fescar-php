<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
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
namespace Hyperf\Seata\SqlParser\Parser;

interface ParserInterface
{
    public function parser(): array;

    public function getTableName(): string;

    public function getTableAlias(): ?string;

    public function isDelete(): bool;

    public function isUpdate(): bool;

    public function isInsert(): bool;

    public function getOriginSql(): string;

    public function getDbType(): string;

    public function getResourceId(): string;

    public function getSqlType();
}
