<?php

namespace ContainerZpRXMGq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GUm8CZeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gUm8CZe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gUm8CZe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ticket' => ['privates', '.errored..service_locator.gUm8CZe.App\\Entity\\Ticket', NULL, 'Cannot autowire service ".service_locator.gUm8CZe": it references class "App\\Entity\\Ticket" but no such service exists.'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'ticket' => 'App\\Entity\\Ticket',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
