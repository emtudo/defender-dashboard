<?php

/** @var \Illuminate\Routing\Router $router */

$router->get('/', [
    'as'   => 'defender.dashboard.index',
    'uses' => 'Artesaos\Defender\Controllers\DashboardController@index'
]);

$router->get('users', [
    'as' => 'defender.dashboard.users',
    'uses' => 'Artesaos\Defender\Controllers\UsersController@index'
]);

$router->get('users/{users}', [
    'as' => 'defender.dashboard.users.show',
    'uses' => 'Artesaos\Defender\Controllers\UsersController@show'
]);

$router->get('users/{users}/edit', [
	'as' => 'defender.dashboard.users.edit',
	'uses' => 'Artesaos\Defender\Controllers\UsersController@edit'
]);


/* Roles routes */
$router->get('roles', [
	'as' => 'defender.dashboard.roles',
	'uses' => 'Artesaos\Defender\Controllers\RolesController@index'
]);

/* Permissions routes */
$router->get('permissions', [
	'as' => 'defender.dashboard.permissions',
	'uses' => 'Artesaos\Defender\Controllers\PermissionsController@index'
]);
