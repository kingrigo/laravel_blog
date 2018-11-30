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

Route::redirect('/', 'landing');

Auth::routes();

Route::get('landing', 'Web\PageController@landing')->name('landing');
Route::get('blog', 'Web\PageController@blog')->name('blog');
Route::get('post/{id}', 'Web\PageController@post')->name('post')->middleware('auth');

Route::get('create','Web\CrudController@create')->name('post.create')->middleware('auth');
Route::post('store','Web\CrudController@store')->name('post.store')->middleware('auth');
Route::get('delete/{id}','Web\CrudController@destroy')->name('post.delete')->middleware('auth');
Route::get('edit/{id}','Web\CrudController@edit')->name('post.edit')->middleware('auth');
Route::put('update/{id}','Web\CrudController@update')->name('post.update')->middleware('auth');

Route::get('/admin','AdminController@admin')->middleware('is_admin')->name('admin');
Route::get('/aprove/{id}','AdminController@aprove')->middleware('is_admin')->name('admin.aprove');