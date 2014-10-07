<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('seguros');
});

Route::get('/usuario', function()
{
	return View::make('private/login');
});






Route::get('login', array('uses' => 'CpanelController@dologin'));
Route::post('login', array('uses' => 'CpanelController@dologin'));
Route::get('private/login', array('uses' => 'CpanelController@showWelcome'));
Route::post('login', array('as' => 'login', 'uses' => 'CpanelController@dologin'));
Route::get('cotizar', array('as' => 'cotizar', 'uses' => 'cotizarControler@index'));



