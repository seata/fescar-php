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
return [
    'application_id' => uniqid(),
    'tx_service_group' => 'my_test_tx_group',
    // DEFAULT_MODE = GlobalTransactionScanner:AT_MOD + GlobalTransactionScanner::MT_MOD
    'mode' => 1 + 2,
    'access_key' => '',
    'secret_key' => '',
    'commit_retry_count' => 5,
    'rollback_retry_count' => 5,
    'service' => [
        'disable_global_transaction' => false,
        'vgroup_mapping' => [
            'my_test_tx_group' => 'default',
        ],
        'default' => [
            'grouplist' => '127.0.0.1:8091',
        ],
    ],
    'store' => [
        // store mode: file、db
        'mod' => 'db',
        'file' => [

        ],
        'db' => [

        ],
    ],
    'server' => [

    ]
];
