<?php

return [
    'application_id' => '',
    'tx_service_group' => '',
    // DEFAULT_MODE = GlobalTransactionScanner:AT_MOD + GlobalTransactionScanner::MT_MOD
    'mode' => 1 + 2,
    'access_key' => '',
    'secret_key' => '',
    'service' => [
        'disable_global_transaction' => false,
    ],
    'commit_retry_count' => 5,
    'rollback_retry_count' => 5,
];