<?php

namespace Functionalities\ThumbnailBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class ThumbnailExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        //require_once '/home/matias/workspace/ServPro/src/Functionalities/ThumbnailBundle/Lib/ThumbnailHandler.php';
        //new \Functionalities\ThumbnailHandler();
    }

    public function getAlias()
    {
        return 'thumbnail';
    }
}
