<?php

namespace Container3bInxFR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A2a9FbNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.A2a9FbN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A2a9FbN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'post' => ['privates', '.errored..service_locator.A2a9FbN.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.A2a9FbN": it references class "App\\Entity\\Post" but no such service exists.'],
        ], [
            'post' => 'App\\Entity\\Post',
        ]);
    }
}
