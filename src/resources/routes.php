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

/*
 * Show a role details
 */
$router->get('roles/{roles}', [
    'as' => 'defender.dashboard.roles.show',
    'uses' => 'Artesaos\Defender\Controllers\RolesController@show'
]);

/*
 * Creates a new role
 */
$router->post('roles', [
    'as' => 'defender.dashboard.roles.store',
    'uses' => 'Artesaos\Defender\Controllers\RolesController@store'
]);

/* Permissions routes */
$router->get('permissions', [
	'as' => 'defender.dashboard.permissions',
	'uses' => 'Artesaos\Defender\Controllers\PermissionsController@index'
]);


/**
 * Dashboard API
 */
$router->group(['prefix' => 'api'], function() use ($router) {

	// Fetch all roles
	$router->get('roles', 'Artesaos\Defender\Controllers\API\RolesController@index');

});