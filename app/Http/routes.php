<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('report/create', 'ReportController@create');
Route::get('report/{project_id}', 'ReportController@index');
Route::get('report/show/{report_id}', 'ReportController@show');
Route::get('report/edit/{report_id}', 'ReportController@edit');
Route::put('report/update/{report_id}', 'ReportController@update');
Route::post('report/store', 'ReportController@store');
Route::post('report/destroy/{report_id}', 'ReportController@destroy');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
