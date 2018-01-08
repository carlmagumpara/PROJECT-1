<?php

Route::group(['module' => 'Admin', 'middleware' => ['web'], 'namespace' => 'App\Modules\Admin\Controllers', 'prefix' => 'admin'], function() {

    Route::resource('Admin', 'AdminController');
    Route::get('/','Admin\LoginController@redirectToAdminLogin');
    Route::get('/dashboard', ['uses' => 'AdminController@index', 'as' => 'admin.index']);
    // Users
    Route::get('/users', ['uses' => 'AdminController@users', 'as' => 'admin.users.index']);
    // Posts
    Route::group(['prefix' => 'posts'], function () {
      Route::get('/', ['uses' => 'PostController@index', 'as' => 'admin.posts.index']);
      Route::get('/create', ['uses' => 'PostController@create', 'as' => 'admin.posts.create']);
      Route::post('/store', ['uses' => 'PostController@store', 'as' => 'admin.posts.store']);
      Route::get('/edit/{id}', ['uses' => 'PostController@edit', 'as' => 'admin.posts.edit']);
      Route::post('/update/{id}', ['uses' => 'PostController@update', 'as' => 'admin.posts.update']);
      Route::get('/show/{id}', ['uses' => 'PostController@show', 'as' => 'admin.posts.show']);
      Route::delete('/delete/{id}', ['uses' => 'PostController@destroy', 'as' => 'admin.posts.delete']);
    });
    
    // Auth
    Route::get('/login','Auth\LoginController@showLoginForm');
    Route::post('/login','Auth\LoginController@login');
    Route::post('/logout','Auth\LoginController@logout');
    Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('/password/reset' ,'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('/password/reset' ,'Auth\ResetPasswordController@reset');
    Route::get( '/password/reset/{token}' ,'Auth\ResetPasswordController@showResetForm');
    Route::get('/register' ,'Auth\RegisterController@showRegistrationForm');
    Route::post('/register' ,'Auth\RegisterController@register');

});
