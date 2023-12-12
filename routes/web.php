<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginCtr;
use App\Http\Controllers\ProdukCtr;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ContactController;

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

route::get('/kontak', function (){
    return view('kontak');
});

Route::get('/', [ProdukCtr::class, 'index'])->name('produk');

Route::get('/kontak', [ContactController::class, 'showForm'])->name('kontak.form');
Route::post('/kontak', [ContactController::class, 'sendEmail'])->name('kontak.send');

//buat login sama logout mas bro
Route::post('/login', [LoginCtr::class, 'login']);
Route::get('/logout', [LoginCtr::class, 'logout']);

Route::post('/register', [LoginCtr::class, 'register']);


// ini buat produk
Route::get('/produk/{id}', [ProdukCtr::class, 'showDetail'])->name('detail.produk');
Route::get('/produk', [ProdukCtr::class, 'showAll'])->name('produk');


//buat crud data :v
Route::get('/crud', [CrudController::class, 'index']);
Route::post('/add-data', [CrudController::class, 'addData']);
Route::get('/delete-data/{id}', [CrudController::class, 'deleteData']);
Route::get('/edit-form/{id}', [CrudController::class, 'editForm']);
Route::post('/update-data/{id}', [CrudController::class, 'updateData']);
