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

Route::resource('page','PagesController');

Route::resource('cont','ContainerController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('elfinder', '\Barryvdh\Elfinder\ElfinderController@showIndex');

Route::get('test1/{id}', '\Barryvdh\Elfinder\ElfinderController@showPopup');
Route::get('test2', 'PagesController@test2');

Route::get('glide/{path}', function($path){
	$server = \League\Glide\ServerFactory::create([
		'source' => app('filesystem')->disk('public')->getDriver(),
		'cache' => storage_path('glide'),
	]);
	return $server->getImageResponse($path, Input::query());
})->where('path', '.+');