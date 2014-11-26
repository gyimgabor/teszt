<?php
namespace Database;

return array(
    'doctrine' => array(
        'driver' => array(
            'Database_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'cache' => 'apc',
                'paths' => array()
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Database\Entity' => 'Database_driver'
                ),
            ),
        ),
        'configuration' => array(
            'orm_default' =>array(
            ),
        ),
    ),
);