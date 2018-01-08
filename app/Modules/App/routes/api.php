<?php

Route::group(['module' => 'App', 'middleware' => ['api'], 'namespace' => 'App\Modules\App\Controllers'], function() {

    Route::resource('App', 'AppController');

});
