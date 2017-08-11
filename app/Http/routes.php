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



Route::get('/', 'FrontController@index' );
Route::get('admin', 'FrontController@admin');
Route::resource('usuario','UsuarioController');
Route::resource('log', 'LogController@store');
Route::resource('genero', 'GeneroController');

/*Route::get('contacto', function(){
	return view('contacto');
});

Route::get('reviews', function(){
	return view('reviews');
});*/



/*
Route::get('/', function () {
    return view('welcome');
});



Route::get('prueba', function(){
	echo 'Hola mundo';
});

Route::get('producto', 'PruebaControler@index');

Route::get('nuevo', 'metodoscontroller@index');*/