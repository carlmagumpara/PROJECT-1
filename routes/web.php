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
Route::post('/register', ['uses' => 'Auth\RegisterController@register', 'as' => 'register']);
Route::get('/thank-you', ['uses' => 'Auth\RegisterController@thankYou', 'as' => 'auth.thank-you']);
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
	Route::get('/letter-of-intent/{legal_problem_id}', ['uses' => 'LegalServicesController@letterOfIntent', 'as' => 'legal-services.legal-cases.leter-of-intent']);
  Route::get('/legal-problem/{legal_problem_id}', ['uses' => 'LegalServicesController@legalProblem', 'as' => 'legal-services.legal-cases.legal-problem']);
  Route::post('/legal-problem/{legal_problem_id}/update', ['uses' => 'LegalServicesController@legalProblemPost', 'as' => 'legal-services.legal-cases.legal-problem.post']);
  Route::get('/summary-of-facts/{legal_problem_id}', ['uses' => 'LegalServicesController@summaryOfFacts', 'as' => 'legal-services.legal-cases.summary-of-facts']);
  Route::post('/summary-of-facts/{legal_problem_id}/update', ['uses' => 'LegalServicesController@summaryOfFactsPost', 'as' => 'legal-services.legal-cases.summary-of-facts.post']);
  Route::get('/objectives-and-questions/{legal_problem_id}', ['uses' => 'LegalServicesController@objectivesAndQuestions', 'as' => 'legal-services.legal-cases.objectives-and-questions']);
  Route::post('/objectives-and-questions/{legal_problem_id}', ['uses' => 'LegalServicesController@objectivesAndQuestionsPost', 'as' => 'legal-services.legal-cases.objectives-and-questions.post']);
  Route::get('/summary-of-information/{legal_problem_id}', ['uses' => 'LegalServicesController@summaryOfInformation', 'as' => 'legal-services.legal-cases.summary-of-information']);
});