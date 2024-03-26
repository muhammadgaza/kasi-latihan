<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;



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


    Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::group(['prefix' => 'admin','middleware' =>['auth'], 'as' => 'admin'], function(){
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

        
        Route::get('/user-registrasi', [AuthController::class, 'indexRegistrasi'])->name('registrasi');
        Route::post('/user-registrasi', [AuthController::class, 'store'])->name('auth.registrasi');
        Route::delete('/users/{id}', [AuthController::class, 'destroy'])->name('users.destroy');
        Route::put('/users/{id}', [AuthController::class, 'update'])->name('users.update');
    
        Route::get('/produk', [ProdukController::class, 'index'])->name('produk-pembelian');
        Route::get('/pendataan-produk', [ProdukController::class, 'pendataan'])->name('produk-pendataan'); 
        Route::post('/pendataan-produk', [ProdukController::class, 'store'])->name('storeProduk');
        Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
    
        Route::get('/list-kategori', [KategoriController::class, 'index'])->name('list.kategori');
    
        Route::get('/home', [HomeController::class, 'index']);
    });

    









