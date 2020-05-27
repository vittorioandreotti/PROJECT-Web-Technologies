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

Route::get('/', 'PublicController@showHome')
        ->name('home');

Route::view('/contact', 'contact')
        ->name('contact');

Route::view('/where', 'where')
        ->name('where');

Route::view('/who', 'who')
        ->name('who');

Route::view('/howToBuy', 'shopinfo')
        ->name('shopinfo');

Route::view('/privacyPolicy', 'privacyPolicy')
        ->name('privacyPolicy');

Route::get('/catalog', 'PublicController@showCatalog1')
        ->name('catalog1');

Route::get('/selTopCat/{topCat}', 'PublicController@showCatalog2')
        ->name('catalog2');

Route::get('/selTopCat/{topCat}/selCat/{subCat}', 'PublicController@showCatalog3')
        ->name('catalog3');

Route::get('/selTopCat/{topCat}/selCat/{subCat}/product/{id}','PublicController@showProduct')
        ->name('product');

Route::view('/howToRegister', 'reginfo')
        ->name('reginfo');

// Rotte ADMIN
Route::get('/admin', 'AdminController@index')
        ->name('admin');
Route::get('/admin/newproduct', 'AdminController@addProduct')
        ->name('newproduct');

Route::post('/admin/newproduct', 'AdminController@storeProduct')
        ->name('newproduct.store');

// Rotte per lo STAFF
Route::get('/staff', 'StaffController@index')
        ->name('staff');

// Rotte per il login
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

//Roote per la registrazione

Route::get('signin', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('signin', 'Auth\RegisterController@register');

Route::get('/user', 'UserController@index')
        ->name('user')->middleware('can:isUser');


Route::get('/user/profile', 'UserController@showProfile')
        ->name('profile')->middleware('can:isUser');


Route::get('/editProfile','UserController@editProfile')
        ->name('editProfile')->middleware('can:isUser');

Route::post('/editProfile', 'UserController@storeProfile')
        ->name('editProfile.store');

Route::get('/editPassword', 'UserController@editPassword')
        ->name('editPassword')->middleware('can:isUser');

Route::post('/editPassword', 'UserController@storePassword')
        ->name('editPassword.store');
