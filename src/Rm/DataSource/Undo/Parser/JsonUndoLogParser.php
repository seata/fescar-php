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
        $content = (string) $content;
        $values = json_decode($content, true);
        $instance = new BranchUndoLog();
        foreach ($values as $key => $value) {
            $methodName = 'set' . Str::ucfirst($key);
            if (method_exists($instance, $methodName)) {
                $instance->{$methodName}($value);
            }
        }
        return $instance;
    }
}
