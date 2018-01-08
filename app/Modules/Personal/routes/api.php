<?php

Route::group(['module' => 'Personal', 'middleware' => ['api'], 'namespace' => 'App\Modules\Personal\Controllers'], function() {

    Route::resource('Personal', 'PersonalController');

});
