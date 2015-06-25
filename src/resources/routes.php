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
