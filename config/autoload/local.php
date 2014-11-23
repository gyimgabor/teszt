<?php
/**
 * Local Configuration Override
 *
 * This configuration override file is for overriding environment-specific and
 * security-sensitive configuration information. Copy this file without the
 * .dist extension at the end and populate values as needed.
 *
 * @NOTE: This file is ignored from Git by default with the .gitignore included
 * in ZendSkeletonApplication. This is a good practice, as it prevents sensitive
 * credentials from accidentally being committed into version control.
 */

return array(
    // Whether or not to enable a configuration cache.
    // If enabled, the merged configuration will be cached and used in
    // subsequent requests.
    //'config_cache_enabled' => false,
    // The key used to create the configuration cache file name.
    //'config_cache_key' => 'module_config_cache',
    // The path in which to cache merged configuration.
    //'cache_dir' =>  './data/cache',
    // ...

    
    //'public_dir' => 'public',

    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOSqlsrv\Driver',
                'params' => array(
                    'host'     => 'lzkb5j4ld0.database.windows.net',
                    'port'     => '1433',
                    'user'     => 'gabor',
                    'password' => 'Mystro!9',
                    'dbname'   => 'webapptAdWLpCnKh',
                    'charset'  => 'UTF8' 
                )
            )
        ),
        'configuration' => array(
            'orm_default' => array(
                'metadata_cache'    => 'apc',
                'query_cache'       => 'apc',
                'result_cache'      => 'apc',
                'generate_proxies'  => true,
                'proxy_dir'         => 'data/DoctrineORMModule/Proxy',
                'proxy_namespace'   => 'DoctrineORMModule\Proxy',
            )
        ),
        'cache' => array(
                'apc' => array(
                    'namespace'    => 'Application'
                )
        )
    ),

);
