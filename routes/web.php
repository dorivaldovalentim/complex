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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/home', 'AdminController@index')->name('admin.home');
});