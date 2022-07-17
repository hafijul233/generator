<?php

// config for Hafijul233/Generator
return [

    /**
     *
     */
    'root_namespace' => 'App',

    /**
     *
     */
    'root_path' => base_path('app'),

    /**
     *
     */
    'resource_types' => [
        'options' => [
            'api' => 'Api Resource',
            'web' => 'Http Web Resource'
        ],

        'default' => 'web'
    ],
];
