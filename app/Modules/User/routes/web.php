<?php

Route::group(['module' => 'User', 'middleware' => ['web'], 'namespace' => 'App\Modules\User\Controllers', 'prefix' => 'user'], function() {

    Route::resource('User', 'UserController');

});
