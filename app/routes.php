<?php


Route::controller('usuario', 'usuarioController');
Route::controller('cotizar','cotizarControler');
Route::controller('panel','CpanelController');
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



/*Route::get('usuario', array('before' => 'auth.basic', function()
	{
		return View::make('');
	}));

*/



Route::get('/', function()
{
	return View::make('seguros');
});




Route::get('/', function()
{
	return View::make('slider');
});







