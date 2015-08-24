<?php

return array(
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Home',
                'route' => 'home'
            ),
            array(
                'label' => 'About',
                'route' => 'about',
            )
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory'
        )
    )
);