<?php

return [

    'users' => [

        'index' => [

            'heading' => 'Usuário Registrados'

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

    'navigation' => [

        'brand'       => 'Defender Dashboard',

        'users'       => 'Usuários',
        
        'roles'       => 'Grupos',
        
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
