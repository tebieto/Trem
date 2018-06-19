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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/send/report', [
	'uses' => 'HomeController@report',
	'as' => 'report.update'
	]);
	
Route::get('/view/reports', [
	'uses' => 'HomeController@viewreport',
	'as' => 'report.vewreport'
	]);
	
	
Route::get('/get/reports/{type}/{branch}/{year}/{start}', [
   'uses' => 'HomeController@getReports',
    'as' => 'getreports'
]);
