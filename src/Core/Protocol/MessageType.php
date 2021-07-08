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
namespace Hyperf\Seata\Core\Protocol;

class MessageType
{
    /**
     * The constant TYPE_GLOBAL_BEGIN.
     */
    public const TYPE_GLOBAL_BEGIN = 1;

    /**
     * The constant TYPE_GLOBAL_BEGIN_RESULT.
     */
    public const TYPE_GLOBAL_BEGIN_RESULT = 2;

    /**
     * The constant TYPE_GLOBAL_COMMIT.
     */
    public const TYPE_GLOBAL_COMMIT = 7;

    /**
     * The constant TYPE_GLOBAL_COMMIT_RESULT.
     */
    public const TYPE_GLOBAL_COMMIT_RESULT = 8;

    /**
     * The constant TYPE_GLOBAL_ROLLBACK.
     */
    public const TYPE_GLOBAL_ROLLBACK = 9;

    /**
     * The constant TYPE_GLOBAL_ROLLBACK_RESULT.
     */
    public const TYPE_GLOBAL_ROLLBACK_RESULT = 10;

    /**
     * The constant TYPE_GLOBAL_STATUS.
     */
    public const TYPE_GLOBAL_STATUS = 15;

    /**
     * The constant TYPE_GLOBAL_STATUS_RESULT.
     */
    public const TYPE_GLOBAL_STATUS_RESULT = 16;

    /**
     * The constant TYPE_GLOBAL_LOCK_QUERY.
     */
    public const TYPE_GLOBAL_LOCK_QUERY = 21;

    /**
     * The constant TYPE_GLOBAL_LOCK_QUERY_RESULT.
     */
    public const TYPE_GLOBAL_LOCK_QUERY_RESULT = 22;

    /**
     * The constant TYPE_BRANCH_COMMIT.
     */
    public const TYPE_BRANCH_COMMIT = 3;

    /**
     * The constant TYPE_BRANCH_COMMIT_RESULT.
     */
    public const TYPE_BRANCH_COMMIT_RESULT = 4;

    /**
     * The constant TYPE_BRANCH_ROLLBACK.
     */
    public const TYPE_BRANCH_ROLLBACK = 5;

    /**
     * The constant TYPE_BRANCH_ROLLBACK_RESULT.
     */
    public const TYPE_BRANCH_ROLLBACK_RESULT = 6;

    /**
     * The constant TYPE_BRANCH_REGISTER.
     */
    public const TYPE_BRANCH_REGISTER = 11;

    /**
     * The constant TYPE_BRANCH_REGISTER_RESULT.
     */
    public const TYPE_BRANCH_REGISTER_RESULT = 12;

    /**
     * The constant TYPE_BRANCH_STATUS_REPORT.
     */
    public const TYPE_BRANCH_STATUS_REPORT = 13;

    /**
     * The constant TYPE_BRANCH_STATUS_REPORT_RESULT.
     */
    public const TYPE_BRANCH_STATUS_REPORT_RESULT = 14;

    /**
     * The constant TYPE_SEATA_MERGE.
     */
    public const TYPE_SEATA_MERGE = 59;

    /**
     * The constant TYPE_SEATA_MERGE_RESULT.
     */
    public const TYPE_SEATA_MERGE_RESULT = 60;

    /**
     * The constant TYPE_REG_CLT.
     */
    public const TYPE_REG_CLT = 101;

    /**
     * The constant TYPE_REG_CLT_RESULT.
     */
    public const TYPE_REG_CLT_RESULT = 102;

    /**
     * The constant TYPE_REG_RM.
     */
    public const TYPE_REG_RM = 103;

    /**
     * The constant TYPE_REG_RM_RESULT.
     */
    public const TYPE_REG_RM_RESULT = 104;
}
