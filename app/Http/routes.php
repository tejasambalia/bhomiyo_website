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

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::group(['middleware' => ['web']], function () {
	Route::post('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);

	Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'AdminController@dashboard']);

	Route::get('/add_records', ['as' => 'add_records', 'uses' => 'PersonsController@add_records']);
	Route::post('/handle_add_records', ['as' => 'handle_add_records', 'uses' => 'PersonsController@handle_add_records']);

	Route::get('/edit_records', ['as' => 'edit_records', 'uses' => 'PersonsController@edit_records']);
	Route::post('/handle_edit_records', ['as' => 'handle_edit_records', 'uses' => 'PersonsController@handle_edit_records']);

	Route::get('/add_advertisement', ['as' => 'add_advertisement', 'uses' => 'AdvertisementController@add_advertisement']);
	Route::post('/handle_add_advertisement', ['as' => 'handle_add_advertisement', 'uses' => 'AdvertisementController@handle_add_advertisement']);

	Route::get('/edit_advertisement', ['as' => 'edit_advertisement', 'uses' => 'AdvertisementController@edit_advertisement']);
	Route::post('/handle_edit_advertisement', ['as' => 'handle_edit_advertisement', 'uses' => 'AdvertisementController@handle_edit_advertisement']);
});
