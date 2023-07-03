<?php

namespace ContainerRphJdfc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilterCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\FilterCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\FilterCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/FilterCrudController.php';

        $container->services['App\\Controller\\Admin\\FilterCrudController'] = $instance = new \App\Controller\Admin\FilterCrudController();

        $instance->setContainer(($container->privates['.service_locator.3YFBJbt'] ?? $container->load('get_ServiceLocator_3YFBJbtService'))->withContext('App\\Controller\\Admin\\FilterCrudController', $container));

        return $instance;
    }
}
