<?php

namespace Container3bInxFR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlogControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\BlogController' shared autowired service.
     *
     * @return \App\Controller\Admin\BlogController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/BlogController.php';

        $container->services['App\\Controller\\Admin\\BlogController'] = $instance = new \App\Controller\Admin\BlogController();

        $instance->setContainer(($container->privates['.service_locator.Ohb2d9A'] ?? $container->load('get_ServiceLocator_Ohb2d9AService'))->withContext('App\\Controller\\Admin\\BlogController', $container));

        return $instance;
    }
}
