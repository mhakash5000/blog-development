<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('layouts.home');
})->name('website');

Route::get('home', 'HomeController@index')->name('home');

Auth::routes();
// Route::get('home', 'CategoryController@index')->name('home');

//frontend route start from here
route::get('/','FrontEndController@home')->name('website');
route::get('/about','FrontEndController@about')->name('about');
route::get('/contact','FrontEndController@contact')->name('contact');
route::get('/post','FrontEndController@post')->name('post');





//backend route start from here
//category route start from here
Route::prefix('category')->group(function () {
Route::get('view', 'CategoryController@index')->name('category.view');
Route::get('create', 'CategoryController@create')->name('category.create');
Route::post('store', 'CategoryController@store')->name('category.store');
Route::get('edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('update/{id}', 'CategoryController@update')->name('category.update');
Route::get('delete/{id}', 'CategoryController@destroy')->name('category.delete');
});
//tag route start from here
Route::prefix('tag')->group(function () {
Route::get('view', 'TagController@index')->name('tag.view');
Route::get('create', 'TagController@create')->name('tag.create');
Route::post('store', 'TagController@store')->name('tag.store');
Route::get('edit/{id}', 'TagController@edit')->name('tag.edit');
Route::post('update/{id}', 'TagController@update')->name('tag.update');
Route::get('delete/{id}', 'TagController@destroy')->name('tag.delete');
});
//tag route start from here
Route::prefix('post')->group(function () {
Route::get('view', 'PostController@index')->name('post.view');
Route::get('create', 'PostController@create')->name('post.create');
Route::post('store', 'PostController@store')->name('post.store');
Route::get('edit/{id}', 'PostController@edit')->name('post.edit');
Route::get('show', 'PostController@show')->name('post.show');
Route::post('update/{id}', 'PostController@update')->name('post.update');
Route::get('delete/{id}', 'PostController@destroy')->name('post.delete');
});


