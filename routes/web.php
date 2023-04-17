<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'Laravel';
});

Route::get('/view','App\Http\Controllers\PostsController@viewMain');

Route::get('/posts', 'App\Http\Controllers\PostsController@index');

Route::get('/read', 'App\Http\Controllers\PostsController@read');
Route::get('/posts/create', 'App\Http\Controllers\PostsController@create_post');

Route::get('/posts/update', 'App\Http\Controllers\PostsController@update_post');

Route::get('/posts/delete', 'App\Http\Controllers\PostsController@delete_post');

Route::get('/posts/first', 'App\Http\Controllers\PostsController@firstOrCreate');

Route::get('/articles', 'App\Http\Controllers\ArticlesController@index');


