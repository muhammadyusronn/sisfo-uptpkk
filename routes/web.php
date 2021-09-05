<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BeritaController;
use App\Http\Controllers\backend\BeritaKategoriController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\PengumumanController;
use App\Http\Controllers\backend\PengumumanKategoriController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'layouts.admin.app')->name('home');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('auth.login');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => 'cek_login:superadmin'], function () {
        Route::get('/dash', [HomeController::class, 'index'])->name('dash');
    });
    Route::group(['middleware' => 'cek_login:admin'], function () {
        // Route::get('/admin', [HomeController::class, 'index']);
    });
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    //
});

// Routing Admin
Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin-create', [AdminController::class, 'create']);
Route::post('/admin-delete', [AdminController::class, 'delete']);
Route::post('/admin/save', [AdminController::class, 'create']);

// Routing Pengumuman
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pengumuman-create', [PengumumanController::class, 'create']);
Route::post('/pengumuman/save', [PengumumanController::class, 'create'])->name('pengumuman.save');
Route::post('/pengumuman/delete', [PengumumanController::class, 'delete'])->name('pengumuman.delete');

// Routing Kategori Pengumuman
Route::get('/PNKategori', [PengumumanKategoriController::class, 'index'])->name('pengumuman');
Route::get('/PNKategori-create', [PengumumanKategoriController::class, 'create'])->name('pengumuman.create');
Route::get('/PNKategori/checkSlug', [PengumumanKategoriController::class, 'checkslug'])->name('PNKategori.checkSlug');
Route::post('/PNKategori/save', [PengumumanKategoriController::class, 'create'])->name('PNKategori.save');
Route::post('/PNKategori-delete', [PengumumanKategoriController::class, 'delete'])->name('PNKategori.delete');

// Routing Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita-create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita-save', [BeritaController::class, 'create'])->name('berita.save');
Route::post('/berita-delete', [BeritaController::class, 'delete'])->name('berita.delete');

// Routing Kategori Berita
Route::get('/BRKategori', [BeritaKategoriController::class, 'index'])->name('BRKategori');
Route::get('/BRKategori-create', [BeritaKategoriController::class, 'create'])->name('BRKategori.create');
Route::post('/BRKategori-save', [BeritaKategoriController::class, 'create'])->name('BRKategori.save');
Route::post('/BRKategori-delete', [BeritaKategoriController::class, 'delete'])->name('BRKategori.delete');
