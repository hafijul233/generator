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

    /**
     *
     */
    'model_options' => [
        'soft-delete' => 'Soft Delete',
        'audit' => 'Change Audit',
        'migration' => 'Create Table Migration',
        'factory' => 'Create Faker Factory Class'
    ],

    /**
     *
     */
    'model_defaults' => [
        'soft-delete',
        'audit',
        'migration',
    ],

    /**
     *
     */
    'field_types' => [
        'Text Fields' => [
            'text' => 'Text',
            'email' => 'Email',
            'password' => 'Password',
        ],
        'Number Fields' => [
            'integer' => 'Integer',
            'float' => 'float',
            'money' => 'Money',
        ],
        'Date Time Fields' => [
            'date' => 'Only Date',
            'time' => 'Only Time',
            'datetime' => 'Date Time',
        ],
        'File Fields' => [
            'file' => 'Default file uploader',
            'image' => 'Image uploader with preview',
        ],
        'Relation Fields' => [
        ],
    ]
];
