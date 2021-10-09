<?php

namespace Hyperf\Seata\Rm\DataSource\Undo\Parser;


use Hyperf\Seata\Rm\DataSource\Undo\BranchUndoLog;
use Hyperf\Seata\Rm\DataSource\Undo\UndoLogParser;
use Hyperf\Utils\Str;

class JsonUndoLogParser implements UndoLogParser
{

    public function getName(): string
    {
        return 'json';
    }

    public function getDefaultContent(): string
    {
        return '{}';
    }

    public function encode(BranchUndoLog $branchUndoLog): string
    {
        return json_encode($branchUndoLog->toArray());
    }

    public function decode(mixed $content): BranchUndoLog
    {
        $content = (string)$content;
        $values = json_decode($content, true);
        $instance = new BranchUndoLog();
        foreach ($values as $key => $value) {
            $methodName = 'set' . Str::ucfirst($key);
            if (method_exists($instance, $methodName)) {
                $instance->$methodName($value);
            }
        }
        return $instance;
    }
}