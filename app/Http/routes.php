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


Route::get('/tarea/create','TareaController@create');
Route::get('/tarea','TareaController@index');

Route::post('store', [
    'as' => 'tarea.store', 'uses' => 'TareaController@store'
]);



Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('tarea/{tarea}/edit', [
    'as' => 'tarea.edit', 'uses' => 'TareaController@edit'
]);
Route::put('tarea/{tarea}', [
    'as' => 'tarea.update', 'uses' => 'TareaController@update'
]);
Route::patch('tarea/{tarea}', 'TareaController@update');