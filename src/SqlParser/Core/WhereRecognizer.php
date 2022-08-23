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

interface WhereRecognizer extends SQLRecognizer
{
    /**
     * Gets where condition.
     *
     * @param parametersHolder  the parameters holder
     * @param paramAppenderList the param appender list
     * @return the where condition
     */
    public function getWhereConditionWithParametersHolderAndList(ParametersHolder $parametersHolder, array $paramAppenderList): string;

    /**
     * Gets where condition.
     */
    public function getWhereCondition(): string;

    /**
     * Return the limit SQL.
     *
     * @param parametersHolder  the parameters holder
     * @param paramAppenderList the param appender list
     * @return The limit SQL
     */
    public function getLimit(ParametersHolder $parametersHolder, array $paramAppenderList): string;

    /**
     * Return the order by SQL.
     *
     * @return The order by SQL
     */
    public function getOrderBy(): string;
}
