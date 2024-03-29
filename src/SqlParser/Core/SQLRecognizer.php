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
namespace Hyperf\Seata\SqlParser\Core;

interface SQLRecognizer
{
    /**
     * Type of the SQL. INSERT/UPDATE/DELETE ...
     */
    public function getSQLType(): SQLType;

    /**
     * TableRecords source related in the SQL, including alias if any.
     * SELECT id, name FROM user u WHERE ...
     * Alias should be 'u' for this SQL.
     */
    public function getTableAlias(): string;

    /**
     * TableRecords name related in the SQL.
     * SELECT id, name FROM user u WHERE ...
     * TableRecords name should be 'user' for this SQL, without alias 'u'.
     *
     * @see #getTableAlias() #getTableAlias()#getTableAlias()
     */
    public function getTableName(): string;

    /**
     * Return the original SQL input by the upper application.
     */
    public function getOriginalSQL(): string;
}
