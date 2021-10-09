<?php


namespace Hyperf\Seata\Core\Rpc;


interface Disposable
{

    public function destroy(): void;

}