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

Route::get('index', function()
{
	return View::make('moxi');
});

Route::get('Auth/Persona', function()
{
	return View::make('Auth.loginPersona');
});

Route::get('Auth/Tienda', function()
{
	return View::make('Auth.login');
});
Route::get('Auth/Contacto', function()
{
	return View::make('Auth.contacto');
});
Route::post('Auth/Login', 'PersonaController@loginPersona');

Route::post('login', 'AuthController@postLogin'); //Verificar datos
Route::get('logout', 'AuthController@logout'); 





