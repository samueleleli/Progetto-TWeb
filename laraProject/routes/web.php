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