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

Route::get('/','FrontendController@home')->name('homepage');

Route::get('item','FrontendController@item')->name('item');

Route::get('detail/{id}','FrontendController@detail')->name('detail');

Route::get('register','FrontendController@register')->name('register');

Route::get('login','FrontendController@login')->name('login');

Route::get('checkout','FrontendController@checkout')->name('checkout');

Route::get('profile','FrontendController@profile')->name('profile');


//backend------------------------------------------------
Route::middleware(['auth'])->group(function () {

Route::resource('orders','OrderController');

Route::get('dashboard','BackendController@dashboard')->name('dashboard');

Route::resource('items','ItemController');//7(get-4/post-1/put-1/delete-1

Route::resource('brand','BrandController');

Route::resource('category','CategoryController');

Route::resource('subcategory','SubcategoryController');
});
//end backend-------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


