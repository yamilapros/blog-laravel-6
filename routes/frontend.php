<?php


Route::get('/', 'UserController@index')->name('user.index');
//Route::get('/post', 'UserController@post')->name('user.post');
Route::get('/post/{slug}', 'UserController@post')->name('user.post');