<?php

return [

    'index' => [
        'manage_users' => 'Gerenciar Usuários',
        'manage_roles' => 'Gerenciar Grupos',
        'manage_permissions' => 'Gerenciar Permissões'
    ],

    'users' => [
        'index' => [
            'heading' => 'Usuário Registrados',
            'empty'   => 'Nenhum usuário cadastrado.'
        ],
        'show' => [
            'heading' => 'Detalhes do Usuário',
			'email' => 'Email',
			'created_at' => 'Data de Cadastro',
			'updated_at' => 'Última Atualização',
			'roles' => [
				'empty' => 'Nenhum grupo atribuído para este usuário.'
			],
			'permissions' => [
				'empty' => 'Este usuário não possui permissões específicas atribuídas.'
			]
        ]
    ],

    'roles' => [
        'index' => [
            'empty' => 'Não existem grupos cadastrados.',
            'heading' => 'Lista de Grupos'
        ]
    ],

    'permissions' => [
        'index' => [
            'empty' => 'Não existem permissões cadastrada.',
            'heading' => 'Lista de Permissões'
        ]
    ],

    'navigation' => [
        'brand' => 'Defender Dashboard',
        'users' => 'Usuários',
        'roles' => 'Grupos',
        'permissions' => 'Permissões'
    ],

	'general' => [
		'users' => 'Usuário',
		'roles' => 'Grupos',
		'permissions' => 'Permissões',
		'actions' => [
			'add' => 'Adicionar',
			'edit' => 'Editar',
			'delete' => 'Excluir',
			'update' => 'Atualizar'
		]
	]
];
