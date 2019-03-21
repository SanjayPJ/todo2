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

Route::get('/', 'PagesController@index')->name('pages.main');
Route::resource('todos', 'TodoController')->except([
    'show'
]);
Route::get('/todos/{id}', 'TodoController@is_done')->name('todos.is_done');