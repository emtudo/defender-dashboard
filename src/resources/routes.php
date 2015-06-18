<?php

Route::group(['prefix' => 'defender'], function() {

    Route::get('/', [
        'as'   => 'defender.dashboard.index',
        'uses' => 'Artesaos\Defender\Controllers\DashboardController@index'
    ]);

    Route::get('users', [
        'as' => 'defender.dashboard.users',
        'uses' => 'Artesaos\Defender\Controllers\UsersController@index'
    ]);

    Route::get('users/{users}', [
        'as' => 'defender.dashboard.users.show',
        'uses' => 'Artesaos\Defender\Controllers\UsersController@show'
    ]);

});
