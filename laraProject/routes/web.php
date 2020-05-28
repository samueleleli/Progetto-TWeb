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

// Rotta per la Homepage
Route::view('/', 'home')
        ->name('home');

// Rotte per il catalogo
Route::get('/catalog', 'PublicController@showCatalog')
        ->name('catalog1');

Route::get('/catalog/selCat/{catId}', 'PublicController@showCategories')
        ->name('catalog2');

Route::get('/catalog/selCat/{catId}/selSotCat/{sotCatId}', 'PublicController@showSubCategories')
        ->name('catalog3');

// Rotte per l'autenticazione
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

// Rotte per la registrazione
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')
        ->name('admin')->middleware('can:isAdmin');

Route::get('/staff', 'StaffController@index')
        ->name('staff')->middleware('can:isStaff');

Route::get('/user', 'UserController@index')
        ->name('user')->middleware('can:isUser');

Route::get('/modCat', 'StaffController@menuStaff')
        ->name('modificacatalogo')->middleware('can:isStaff');



Route::get('/delProd', 'StaffController@showCatalog')
        ->name('delproduct')->middleware('can:isStaff');

Route::get('/newproduct', 'StaffController@addProduct')
        ->name('newproduct')->middleware('can:isStaff');

Route::post('/newproduct', 'StaffController@storeProduct')
        ->name('newproduct.store');

Route::get('/modCat/selproduct', 'StaffController@selectProduct')
        ->name('selproduct')->middleware('can:isStaff');

Route::get('/manUsers', 'AdminController@manageUsers')
        ->name('manUsers');

Route::get('/newStaff', 'AdminController@insertStaff')
        ->name('newStaff');

Route::post('/newStaff', 'AdminController@storeStaff')
        ->name('newStaff.store');
