<?php

return [

    'index' => [
        'manage_users' => 'Gerenciar Usuários',
        'manage_roles' => 'Gerenciar Grupos',
        'manage_permissions' => 'Gerenciar Permissões'
    ],

    'users' => [
        'index' => [
            'heading' => 'Registred Users'
        ],
        'show' => [
            'heading' => 'User Details',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'roles' => [
                'empty' => 'There are no roles attached to that user.'
            ],
            'permissions' => [
                'empty' => 'There are no permissions attached to the user.'
            ]
        ]
    ],

    'navigation' => [
        'brand' => 'Defender Dashboard',
        'users' => 'Users',
        'roles' => 'Roles',
        'permissions' => 'Permissions'
    ],

    'general' => [
        'users' => 'Users',
        'roles' => 'Roles',
        'permissions' => 'Permissions',
        'actions' => [
            'add' => 'Add',
            'edit' => 'Edit',
            'delete' => 'Delete',
            'update' => 'Update'
        ]
    ]
];
