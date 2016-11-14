<?php
/**
 * Authentication Controller.
 * 
 * @author Aleksandra
 * @since Nov 2016
 */

namespace RootCmsAuth\Controller;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class RootCmsAuthControllerFactory implements FactoryInterface
{
    /**
     * 
     * @param \RootCmsAuth\Controller\ContainerInterface $container
     * @param type $requestedName
     * @param array $options
     * @return \RootCmsAuth\Controller\RootCmsAuthController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
       $serv = $container->get('auth-service');
       return new RootCmsAuthController($serv);
    }
}