<?php

Route::group(['module' => 'App', 'middleware' => ['web'], 'namespace' => 'App\Modules\App\Controllers'], function() {

    Route::get('/', ['uses' => 'AppController@index', 'as' => 'app.index']);

    Route::resource('App', 'AppController');
    
    Route::group(['prefix' => 'page'], function () {
      Route::get('/everyday-law/{slug}', ['uses' => 'AppController@everydayLaw', 'as' => 'app.everyday-law.index']);
      Route::get('/about-us', ['uses' => 'AppController@aboutUs', 'as' => 'app.about-us.index']);
      Route::get('/you-and-the-law', ['uses' => 'AppController@youAndTheLaw', 'as' => 'app.you-and-the-law.index']);
      Route::get('/law-and-society', ['uses' => 'AppController@lawAndSociety', 'as' => 'app.law-and-society.index']);
      Route::get('/law-updates', ['uses' => 'AppController@lawUpdates', 'as' => 'app.law-updates.index']);
      Route::get('/lawyers-profile', ['uses' => 'AppController@lawyersProfile', 'as' => 'app.lawyers-profile.index']);
      Route::get('/our-services', ['uses' => 'AppController@ourServices', 'as' => 'app.our-services.index']);
      Route::get('/outradeous-laws-and-lawsuits', ['uses' => 'AppController@outradeousLawsAndLawsuits', 'as' => 'app.outradeous-laws-and-lawsuits.index']);
      Route::get('/lawyers-quotes', ['uses' => 'AppController@lawyersQuotes', 'as' => 'app.lawyers-quotes.index']);
      Route::get('/case-studies', ['uses' => 'AppController@caseStudies', 'as' => 'app.case-studies.index']);
      Route::get('/e-legal-news', ['uses' => 'AppController@eLegalNews', 'as' => 'app.e-legal-news.index']);
      Route::get('/contact-us', ['uses' => 'AppController@contactUs', 'as' => 'app.contact-us.index']);

      });

});
