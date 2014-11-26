<?php

namespace Application;
return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
                
                'may_terminate' => true,
                'child_routes' => array(
/* Public routing */
                    'about' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => 'about',
                            'defaults' => array(
                                'action' => 'about',
                            ),
                        ),
                    ),
                    'registration' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => 'registration',
                            'defaults' => array(
                                'controller' => 'registration',
                                'action' => 'index',
                            ),
                        ),
                    ),
                    'confirmation' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => 'confirmation/:code',
                            'constraints' => array(
                                'code'    => '[0-9A-Za-z]+',
                            ),
                            'defaults' => array(
                                'controller' => 'registration',
                                'action' => 'confirmation',
                            ),
                        ),
                    ),
                    'login' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => 'login',
                            'defaults' => array(
                                'controller' => 'profile',
                                'action' => 'login',
                            ),
                        ),
                    ),
                    'logout' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => 'logout',
                            'defaults' => array(
                                'controller' => 'profile',
                                'action' => 'logout',
                            ),
                        ),
                    ),
/* Public POST only routing */
                    'post' => array(
                        'type'    => 'Method',
                        'priority' => 100,
                        'options' => array(
                            'verb'    => 'post',
                        ),
                        'child_routes' => array(
                            'registration' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => 'registration',
                                    'defaults' => array(
                                        'controller' => 'registration',
                                        'action' => 'registration',
                                    ),
                                ),
                            ),
                            'confirmation' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => 'confirmation',
                                    'defaults' => array(
                                        'controller' => 'registration',
                                        'action' => 'confirming',
                                    ),
                                ),
                            ),
                            'login' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/login',
                                    'defaults' => array(
                                        'controller' => 'profile',
                                        'action' => 'loginProcess',
                                    ),
                                ),
                            ),
                        ),
                    ),
/* Profile routing */
                    'client' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => 'client',
                            'defaults' => array(
                                'controller' => 'profile',
                                'action' => 'profile',//'dashboard',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'profile' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/profile',
                                    'defaults' => array(
                                        'action' => 'profile',
                                    ),
                                ),
                            ),
                            'account' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/account',
                                    'defaults' => array(
                                        'action' => 'account',
                                    ),
                                ),
                            ),
                            'statistics' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/statistics',
                                    'defaults' => array(
                                        'action' => 'statistics',
                                    ),
                                ),
                            ),
                            'billing' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/billing',
                                    'defaults' => array(
                                        'action' => 'billing',
                                    ),
                                ),
                            ),
/* Profile POST only routing */
                            'post' => array(
                                'type'    => 'Method',
                                'priority' => 100,
                                'options' => array(
                                    'verb'    => 'post',
                                ),
                                'child_routes' => array(
                                    'new-domain' => array(
                                        'type'    => 'Literal',
                                        'options' => array(
                                            'route'    => '/ndomain',
                                            'defaults' => array(
                                                'action' => 'newDomain',
                                            ),
                                        ),
                                    ),
                                    'new-fbpage' => array(
                                        'type'    => 'Literal',
                                        'options' => array(
                                            'route'    => '/nfbpage',
                                            'defaults' => array(
                                                'action' => 'newFbpage',
                                            ),
                                        ),
                                    ),
                                    'delete-domain' => array(
                                        'type'    => 'Literal',
                                        'options' => array(
                                            'route'    => '/ddomain',
                                            'defaults' => array(
                                                'action' => 'deleteDomain',
                                            ),
                                        ),
                                    ),
                                    'delete-fbpage' => array(
                                        'type'    => 'Literal',
                                        'options' => array(
                                            'route'    => '/dfbpage',
                                            'defaults' => array(
                                                'action' => 'deleteFbpage',
                                            ),
                                        ),
                                    ),
                                    'send-activation-code' => array(
                                        'type'    => 'Literal',
                                        'options' => array(
                                            'route'    => '/sac',
                                            'defaults' => array(
                                                'action' => 'sendActivationCode',
                                            ),
                                        ),
                                    ),
                                    'confirm-activation' => array(
                                        'type'    => 'Literal',
                                        'options' => array(
                                            'route'    => '/cac',
                                            'defaults' => array(
                                                'action' => 'confirmActivationCode',
                                            ),
                                        ),
                                    ),
                                    'billing' => array(
                                        'type'    => 'Literal',
                                        'options' => array(
                                            'route'    => '/billing',
                                            'defaults' => array(
                                                'action' => 'billingSave',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
/* Subscription routing */
                            'subscription' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/subscription',
                                    'defaults' => array(
                                        'controller' => 'subscription',
                                        'action' => 'index',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'post' => array(
                                        'type'    => 'Method',
                                        'priority' => 100,
                                        'options' => array(
                                            'verb'    => 'post',
                                        ),
                                        'child_routes' => array(
                                            'data' => array(
                                                'type'    => 'Literal',
                                                'options' => array(
                                                    'route'    => '/data',
                                                    'defaults' => array(
                                                        'action' => 'data',
                                                    ),
                                                ),
                                            ),
                                            'upsell' => array(
                                                'type'    => 'Literal',
                                                'options' => array(
                                                    'route'    => '/upsell',
                                                    'defaults' => array(
                                                        'action' => 'upsell',
                                                    ),
                                                ),
                                            ),
                                            'confirmation' => array(
                                                'type'    => 'Literal',
                                                'options' => array(
                                                    'route'    => '/confirmation',
                                                    'defaults' => array(
                                                        'action' => 'confirmation',
                                                    ),
                                                ),
                                            ),
                                            'finish' => array(
                                                'type'    => 'Literal',
                                                'options' => array(
                                                    'route'    => '/finish',
                                                    'defaults' => array(
                                                        'action' => 'finish',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'history' => array(
                                        'type'    => 'Literal',
                                        'options' => array(
                                            'route'    => '/history',
                                            'defaults' => array(
                                                'action' => 'history',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
                   
    'doctrine' => array(
        'driver' => array(
            'Database_driver' => array(
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Mapping')
            ),
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
