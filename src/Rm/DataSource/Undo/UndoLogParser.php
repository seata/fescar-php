<?php


namespace Hyperf\Seata\Rm\DataSource\Undo;


interface UndoLogParser
{

    public function getName(): string;

    public function getDefaultContent(): string;

    public function encode(BranchUndoLog $branchUndoLog): string;

    public function decode(mixed $content): BranchUndoLog;

}