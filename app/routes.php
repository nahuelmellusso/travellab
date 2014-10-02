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
	return View::make('welcome');
});

Route::get('/usuario', function()
{
	return View::make('private/login');
});

// Route::get('usuario/login', array('uses' => 'cpanel@dologin'));
Route::post('usuario/login', array('uses' => 'private/CpanelController@dologin'));