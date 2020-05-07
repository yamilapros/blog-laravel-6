<?php



Route::get('/myadmin', 'AdminController@index')->name('admin.index');

Route::get('/myadmin/post/index', 'PostController@index')->name('post.index');
Route::get('/myadmin/post/create', 'PostController@create')->name('post.create');
Route::post('/myadmin/post/save', 'PostController@save')->name('post.save');
Route::get('/myadmin/post/edit/{id}', 'PostController@edit')->name('post.edit');
Route::post('/myadmin/post/update/{id}', 'PostController@update')->name('post.update');
Route::get('/myadmin/post/delete/{id}', 'PostController@delete')->name('post.delete');

Route::get('/myadmin/category/index', 'CategoryController@index')->name('category.index');
Route::get('/myadmin/category/create', 'CategoryController@create')->name('category.create');
Route::post('/myadmin/category/save', 'CategoryController@save')->name('category.save');
Route::get('/myadmin/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('/myadmin/category/update/{id}', 'CategoryController@update')->name('category.update');
Route::get('/myadmin/category/delete/{id}', 'CategoryController@delete')->name('category.delete');

Route::get('/myadmin/tag/index', 'TagController@index')->name('tag.index');
Route::get('/myadmin/tag/create', 'TagController@create')->name('tag.create');
Route::post('/myadmin/tag/save', 'TagController@save')->name('tag.save');
Route::get('/myadmin/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
Route::post('/myadmin/tag/update/{id}', 'TagController@update')->name('tag.update');
Route::get('/myadmin/tag/delete/{id}', 'TagController@delete')->name('tag.delete');


