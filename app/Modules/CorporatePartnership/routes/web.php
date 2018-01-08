<?php

Route::group(['module' => 'CorporatePartnership', 'middleware' => ['web','auth','corporate'], 'namespace' => 'App\Modules\CorporatePartnership\Controllers', 'prefix' => 'corporate-partnership'], function() {

    Route::resource('CorporatePartnership', 'CorporatePartnershipController');

    // Corporate/Partnership Info
    Route::get('/corporate-partnership-representative-information', ['uses' => 'CorporatePartnershipController@corporatePartnershipRepresentativeInfo', 'as' => 'corporate-partnership.corporate-partnership-representative-information.index']);

    Route::post('/corporate-partnership-representative-information/update', ['uses' => 'CorporatePartnershipController@corporatePartnershipRepresentativeInfoUpdate', 'as' => 'corporate-partnership.corporate-partnership-representative-information.update']);

    Route::get('/corporate-partnership-information', ['uses' => 'CorporatePartnershipController@corporatePartnershipInfo', 'as' => 'corporate-partnership.corporate-partnership-information.index']);

    Route::post('/corporate-partnership-information/update', ['uses' => 'CorporatePartnershipController@corporatePartnershipInfoUpdate', 'as' => 'corporate-partnership.corporate-partnership-information.update']);

    Route::post('/corporate-partnership-information/board-of-directors/add', ['uses' => 'CorporatePartnershipController@boardOfDirectorsAdd', 'as' => 'corporate-partnership.board-of-directors.add']);

    Route::post('/corporate-partnership-information/board-of-directors/update/{id}', ['uses' => 'CorporatePartnershipController@boardOfDirectorsUpdate', 'as' => 'corporate-partnership.board-of-directors.update']);

    Route::get('/corporate-partnership-information/board-of-directors/render', ['uses' => 'CorporatePartnershipController@boardOfDirectorsRender', 'as' => 'corporate-partnership.board-of-directors.render']);
    
    Route::post('/corporate-partnership-information/board-of-directors/delete/{id}', ['uses' => 'CorporatePartnershipController@boardOfDirectorsDelete', 'as' => 'corporate-partnership.board-of-directors.delete']);

 		Route::get('/corporate-partnership-information/board-of-directors/fetch-board-info/{id}', ['uses' => 'CorporatePartnershipController@fetchBoardInfo', 'as' => 'corporate-partnership.board-of-directors.fetch-board-info']);


});
