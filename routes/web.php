<?php

use Illuminate\Support\Facades\Route;


Route::get('/create', 'App\Http\Controllers\Post\CreateController')->name('post.create');
Route::delete('/posts/{post}', 'App\Http\Controllers\Post\DeleteController@destroy')->name('post.delete');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\Post\EditController')->name('post.edit');
Route::get('/posts', 'App\Http\Controllers\Post\IndexController')->name('post.index');
Route::get('/posts/{post}', 'App\Http\Controllers\Post\ShowController')->name('post.show');
Route::post('/posts', 'App\Http\Controllers\Post\StoreController')->name('post.store');
Route::patch('/posts/{post}', 'App\Http\Controllers\Post\UpdateController')->name('post.update');


Route::get('/about', 'App\Http\Controllers\About\AboutController')->name('about.index');
