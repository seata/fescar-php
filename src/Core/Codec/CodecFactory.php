<?php

namespace Hyperf\Seata\Core\Codec;


use Hyperf\Seata\Core\Codec\Seata\SeataCodec;

class CodecFactory
{

    /**
     * @var array
     */
    protected $codecs = [
        CodecType::SEATA => SeataCodec::class,
    ];

    /**
     * @var \Psr\Container\ContainerInterface
     */
    protected $container;

    /**
     * @param \Psr\Container\ContainerInterface $container
     */
    public function __construct(\Psr\Container\ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function get($codec): CodecInterface
    {
        if (! isset($this->codecs[$codec])) {
            throw new \InvalidArgumentException('Codec not found');
        }
        $class = $this->codecs[$codec];
        return $this->container->get($class);
    }

}