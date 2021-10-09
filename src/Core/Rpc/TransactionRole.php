<?php

namespace Hyperf\Seata\Core\Rpc;


class TransactionRole
{

    /**
     * tm
     */
    const TMROLE = 1;
    /**
     * rm
     */
    const RMROLE = 2;
    /**
     * server
     */
    const SERVERROLE = 3;

}