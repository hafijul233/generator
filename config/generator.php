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
            'url' => 'Website URL',

            'textarea' => 'Large Text (Textarea)'
        ],
        'Checkbox/Radio Fields' => [
            'checkbox' => 'Checkbox',
            'radio' => 'Radio',
            'select' => 'Select',
            'multi-select' => 'Multiple Select',

        ],
        'Number Fields' => [
            'integer' => 'Integer',
            'float' => 'float',
            'money' => 'Money',
            'mobile' => 'Mobile',
        ],
        'Date Time Fields' => [
            'date' => 'Only Date',
            'time' => 'Only Time',
            'datetime' => 'Date Time',
        ],
        'Slider Dropdown Fields' => [
            'range' => 'Range Slider',
            'range-dropdown' => 'Select Range Dropdown',
            'password' => 'Password',
            'textarea' => 'Large Text (Textarea)'
        ],
        'File Fields' => [
            'file' => 'Default file uploader',
            'image' => 'Image uploader with preview',
        ],
        'Relation Fields' => [
        ],
    ]
];
