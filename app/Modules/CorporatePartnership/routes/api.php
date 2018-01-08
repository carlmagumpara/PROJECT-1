<?php

Route::group(['module' => 'CorporatePartnership', 'middleware' => ['api'], 'namespace' => 'App\Modules\CorporatePartnership\Controllers'], function() {

    Route::resource('CorporatePartnership', 'CorporatePartnershipController');

});
