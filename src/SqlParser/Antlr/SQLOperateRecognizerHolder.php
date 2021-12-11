<?php

namespace Hyperf\Seata\SqlParser\Antlr;

use Hyperf\Seata\SqlParser\Core\SQLRecognizer;

interface SQLOperateRecognizerHolder
{
    /**
     * Get delete recognizer
     *
     */
    public function getDeleteRecognizer(string $sql): SQLRecognizer;

    /**
     * Get insert recognizer
     *
     */
    public function getInsertRecognizer(string $sql): SQLRecognizer;

    /**
     * Get update recognizer
     *
     */
    public function getUpdateRecognizer(string $sql): SQLRecognizer;

    /**
     * Get SelectForUpdate recognizer
     *
     */
    public function getSelectForUpdateRecognizer(string $sql): SQLRecognizer;
}