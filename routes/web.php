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
})->name('home');

Route::get('/friends', function (){
    return view('friendslist');
})->name('friendslist');

Route::get('/inbox', function (){
    return view('inbox');
})->name('messages');

Route::get('/profil', function (){
    return view('profil');
})->name('profil');

Route::get('/about', function (){
    return view('about');
})->name('about');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



/* ---------- VERSION SIMPLIFIEE ---------- */

Route::get('/simpleversion', function (){
    return view('simpleversion');
})->name('simpleversion');

Route::get('/home', 'HomeController@index')->name('home');
