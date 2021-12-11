<?php

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
     *
     */
    public function getWhereCondition(): string;

    /**
     * Return the limit SQL
     *
     * @param parametersHolder  the parameters holder
     * @param paramAppenderList the param appender list
     * @return The limit SQL.
     */
    public function getLimit(ParametersHolder $parametersHolder, array $paramAppenderList): string;

    /**
     * Return the order by SQL
     *
     * @return The order by SQL.
     */
    public function  getOrderBy(): string;
}