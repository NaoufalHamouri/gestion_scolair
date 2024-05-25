<?php

namespace Container61zuOtx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_UlidGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.ulid_generator' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Id'.\DIRECTORY_SEPARATOR.'AbstractIdGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'IdGenerator'.\DIRECTORY_SEPARATOR.'UlidGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'uid'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'UlidFactory.php';

        return $container->privates['doctrine.ulid_generator'] = new \Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator(new \Symfony\Component\Uid\Factory\UlidFactory());
    }
}
