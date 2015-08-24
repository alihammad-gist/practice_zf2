<?php

return array(
    'router' => array(
        'routes' => array(
            'about' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/about',
                    'defaults' => array(
                        'controller' => 'AboutController',
                        'action' => 'index'
                    )
                )
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'AboutController' => 'About\Controller\IndexController'
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'about' => __DIR__ . '/../view',
        ),
    ),
);
