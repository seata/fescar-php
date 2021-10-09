<?php

namespace Hyperf\Seata\Rm\DataSource\Undo;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Contract\ContainerInterface;
use Hyperf\Seata\Rm\DataSource\Undo\Parser\JsonUndoLogParser;

class UndoLogParserFactory
{

    protected array $parsers = [
        'json' => JsonUndoLogParser::class
    ];

    protected string $defaultParser;

    protected ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $config = $container->get(ConfigInterface::class);
        $this->defaultParser = $config->get('seata.client.undo.log_serialization', 'json');
    }

    public function getDefaultParser(): UndoLogParser
    {
        return $this->container->get($this->parsers[$this->defaultParser]);
    }

}