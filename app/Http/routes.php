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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('create_new_artikel', 'ArtikelController@create');
Route::post('save_new_artikel', 'ArtikelController@save');

Route::get('all_artikel', 'ArtikelController@index');
Route::get('menu1', 'ArtikelController@menu1');
Route::post('search_artikel', 'ArtikelController@search');
Route::get('add_menu1', 'ArtikelController@add_menu1');

Route::get('edit_artikel_menu1/{id}', 'ArtikelController@edit_menu1');
Route::post('artikel_menu1_update', 'ArtikelController@artikel_menu1_update');

Route::get('edit_artikel/{id}', 'ArtikelController@edit');
Route::post('update_artikel', 'ArtikelController@update');

Route::get('view_artikel_/{id}', 'WelcomeController@view');
Route::get('view_artikel/{id}', 'ArtikelController@view');

Route::get('delete_artikel/{id}', 'ArtikelController@destroy');

Route::get('/{slug}', 'ArtikelController@show');

Route::get('/images/{filename}',
	function ($filename)
{
	$path = storage_path() . '/' .$filename;

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file,200);
	$response->header("Content-Type", $type);

	return $response;
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);