<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListBarangController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/barang', [ListBarangController::class, 'index'])->name('ListBarang');
Route::get('/listview', [ListBarangController::class, 'show']);
Route::get('/list_barang', [ListBarangController::class, 'tampilkan']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/user/{id}', function($id) {
    return 'User dengan ID: ' . $id;
});

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', function() {
        return 'Admin Dashboard';
    });
    Route::get('/users', function() {
        return 'Admin Users';
    });
});

// Route::get('/listbarang/{id}/{nama}', function($id, $nama) {
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);