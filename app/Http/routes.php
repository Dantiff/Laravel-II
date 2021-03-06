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
    return view('welcome');
});

Route::get('/articles', [
    'as' => 'articles',
    'uses' => 'ArticlesController@index'
]);

Route::get('/articles/create', 'ArticlesController@create');

Route::post('/articles/create', 'ArticlesController@store');

Route::get('/articles/edit/{id}', 'ArticlesController@edit');

Route::post('/articles/update/{id}', 'ArticlesController@update');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');