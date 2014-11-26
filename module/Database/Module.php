<?php
namespace Database;

use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(	
            'aliases' => array(
                'EntityManager' => 'Doctrine\ORM\EntityManager',
                //'Doctrine\ORM\EntityManager' => 'doctrine.entitymanager.orm_default',
            ),	
        );
    }
}
