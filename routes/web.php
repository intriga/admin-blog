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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {


Route::get('', 'AdminController@welcome')->name('welcome');
Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::get('/category/show/{slug}', 'CategoryController@show')->name('category.show');
Route::get('/category/edit/{slug}', 'CategoryController@edit')->name('category.edit');
Route::put('/category/edit/{slug}', 'CategoryController@update')->name('category.update');
Route::delete('/category/{id}', 'CategoryController@destroy')->name('category.destroy');

});


// Route::get('admin', 'Admin\AdminController@welcome')->name('admin.welcome');
// Route::get('admin/category', 'Admin\CategoryController@index')->name('admin.category');
// Route::get('admin/category/create', 'Admin\CategoryController@create')->name('admin.category.create');
// Route::post('admin/category/store', 'Admin\CategoryController@store')->name('admin.category.store');
// Route::get('admin/category/show/{slug}', 'Admin\CategoryController@show')->name('admin.category.show');
// Route::get('admin/category/edit/{slug}', 'Admin\CategoryController@edit')->name('admin.category.edit');
// Route::put('admin/category/edit/{slug}', 'Admin\CategoryController@update')->name('admin.category.update');
// Route::delete('admin/category/{id}', 'Admin\CategoryController@destroy')->name('admin.category.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
