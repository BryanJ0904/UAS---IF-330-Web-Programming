<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

route::get('/login', function () {
    return view('login');
});

route::get('/produk', function (){
    return view('produk');
});

route::get('/about', function (){
    return view('about');
});

route::get('/profil', function (){
    return view('profil');
});

