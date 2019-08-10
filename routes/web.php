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

// <a class="nav-link" href="{{ route('profile.edit') }}">
// </a>
// Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tamu', 'TamuController@index');

Route::post('/tamu/create', 'TamuController@create');

Route::get('/tamu/{id}/edit', 'TamuController@edit');

Route::post('/tamu/{id}/update', 'TamuController@update');

Route::get('/tamu/{id}/delete', 'TamuController@delete');

Route::get('/search', 'TamuController@search');

Route::post('tamu/store', ['as' => 'store.st', 'uses' => 'TamuController@store']);

Route::get('/bos', 'TamuController@bos');
