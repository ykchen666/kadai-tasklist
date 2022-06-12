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

Route::resource('Task', 'TasksController');



Route::get('/', function () {
    return view('welcome');
});

// CRUD
// メッセージの個別詳細ページ表示
Route::get('Task/{id}', 'TasksController@show');
// create: 新規作成用のフォームページ
Route::get('Task/create', 'TasksController@create');

Route::post('Task', 'TasksController@edit');
// index: showの補助ページ
Route::get('Task', 'TasksController@index');

