<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);
// Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');

Route::prefix('/admin')->namespace('Admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/posts', 'PostController');
});
