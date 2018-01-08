<?php

Route::group(['module' => 'Personal', 'middleware' => ['web','auth'], 'namespace' => 'App\Modules\Personal\Controllers', 'prefix' => 'personal'], function() {

    Route::resource('Personal', 'PersonalController');

    // Personal Info
    Route::get('/personal-information', ['uses' => 'PersonalController@personalInfo', 'as' => 'personal.personal-information.index'])->middleware('personal');
    Route::post('/personal-information/update', ['uses' => 'PersonalController@personalInfoUpdate', 'as' => 'personal.personal-information.update']);

    // Spouse Info
    Route::get('/spouse-information', ['uses' => 'PersonalController@spouseInfo', 'as' => 'personal.spouse-information.index'])->middleware('spouse');
    Route::post('/spouse-information/update', ['uses' => 'PersonalController@spouseInfoUpdate', 'as' => 'personal.spouse-information.update']);

    // Children Info
    Route::get('/children-information', ['uses' => 'PersonalController@childrenInfo', 'as' => 'personal.children-information.index'])->middleware('personal');
    Route::post('/children-information/add', ['uses' => 'PersonalController@childrenInfoAdd', 'as' => 'personal.children-information.add']);
    Route::post('/children-information/delete/{id}', ['uses' => 'PersonalController@childrenInfoDelete', 'as' => 'personal.children-information.delete']);
    Route::post('/children-information/update/{id}', ['uses' => 'PersonalController@childrenInfoUpdate', 'as' => 'personal.children-information.update']);
    Route::get('/children-information/fetch-child-info/{id}', ['uses' => 'PersonalController@fetchChildInfo', 'as' => 'personal.children-information.fetch-child-info']);
    Route::get('/children-information/table-render', ['uses' => 'PersonalController@childrenTableRender', 'as' => 'personal.children-information.table.render']);
    Route::post('/children-information/update-list', ['uses' => 'PersonalController@childrenListUpdate', 'as' => 'personal.children-information.update-list']);

});
