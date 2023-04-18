<?php

use Illuminate\Support\Facades\Route;



Route::get('/posts', 'App\Http\Controllers\PostsController@index')->name('post.index');
Route::post('/posts', 'App\Http\Controllers\PostsController@store')->name('post.store');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostsController@edit')->name('post.edit');

Route::patch('/posts/{post}', 'App\Http\Controllers\PostsController@update')->name('post.update');
Route::delete('/posts/{post}', 'App\Http\Controllers\PostsController@destroy')->name('post.delete');

Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show')->name('post.show');
Route::get('/create', 'App\Http\Controllers\PostsController@create')->name('post.create');

Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/contacts', 'App\Http\Controllers\ContactsController@index')->name('contact.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');
