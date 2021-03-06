<?php

namespace Datatheke\Bundle\PagerBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;

class DoctrineORMCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if ($container->has('doctrine.orm.entity_manager')) {
            $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../../Resources/config'));
            $loader->load('doctrine_orm.xml');
        }
    }
}
