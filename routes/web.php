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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/admin', 'Admin@index')->name('admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::resource('/student', 'StudentController');
Route::resource('/shopsetting', 'ShopsettingController');


Route::get('/delete/{id}', 'deletecontroller@delete');
//Route::get(/generatepdf)
Route::get('/genaratepdf/{id}', 'GenaratepdfController@pdf')->name('pdf');


Route::get('/account', 'AccountController@index');

Route::get('/create.account', 'AccountController@accoutncreate');
Route::post('/create.store', 'AccountController@accountsave');


Route::resource('/customer', 'CustomerController');

Route::resource('/deposit-or-withdraw', 'DepositORWithdrawController');


Route::get('/category', 'ItemController@category');
Route::get('/item', 'ItemController@item');
Route::get('/customert', 'ItemController@customer');
Route::get('/DeuReceives', 'ItemController@DeuReceives');