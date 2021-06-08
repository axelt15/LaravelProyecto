<?php

use Illuminate\Support\Facades\Route;


Route::get('/laravel', function () {
    return view('welcome');
});

Route::view('/', 'index')->name("home");

Route::view('/login', 'login')->name('login');

Route::view('/registro', 'registro')->name('registro');
Route::post('/registro', 'App\Http\Controllers\Registro@store');

//Route::post('/user', 'user')->name('user');




Route::post('/user', 'App\Http\Controllers\UserCont@index')->name('usercontrol');


Route::view('/about', 'about')->name("about");
