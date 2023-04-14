<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'Laravel';
});

Route::get('/articles', 'App\Http\Controllers\ArticlesController@index');

Route::get('/posts', 'App\Http\Controllers\PostsController@index');

Route::get('/posts/create', 'App\Http\Controllers\PostsController@create_post');

Route::get('/posts/update', 'App\Http\Controllers\PostsController@update_post');

Route::get('/posts/delete', 'App\Http\Controllers\PostsController@delete_post');
Route::get('/posts/first', 'App\Http\Controllers\PostsController@firstOrCreate');



