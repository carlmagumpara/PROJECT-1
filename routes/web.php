<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Users Auth
Auth::routes();

// Thank You
Route::get('/thank-you', ['uses' => 'Auth\RegisterController@thankYou', 'as' => 'auth.thank-you']);

// Acount Verification
Route::get('/verified-account/{code}', ['uses' => 'Auth\RegisterController@verifiedAcount', 'as' => 'auth.verified-account']);

// Legal Services
Route::group(['prefix' => 'legal-services'], function () {
	Route::get('/', ['uses' => 'LegalServicesController@index', 'as' => 'legal-services.index']);
	Route::get('/initial-legal-assessment', ['uses' => 'LegalServicesController@initialLegalAssessment', 'as' => 'legal-services.initial-legal-assessment.index']);
});

// Legal Cases
Route::group(['prefix' => 'legal-cases', 'middleware' => ['web', 'auth']], function () {
	Route::get('/', ['uses' => 'LegalServicesController@legalCases', 'as' => 'legal-services.legal-cases.index'])->middleware('auth');
	Route::get('/online-legal-consultation', ['uses' => 'LegalServicesController@onlineLegalConsultation', 'as' => 'legal-services.legal-cases.online-legal-consultation']);
	Route::post('/online-legal-consultation/new', ['uses' => 'LegalServicesController@newLegalCase', 'as' => 'legal-services.legal-cases.online-legal-consultation.new']);

	Route::get('/letter-of-intent/{legal_problem_id}', ['uses' => 'LegalServicesController@letterOfIntent', 'as' => 'legal-services.legal-cases.online-legal-consultation.leter-of-intent']);

});