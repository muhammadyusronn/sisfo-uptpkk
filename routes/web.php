<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BeritaController;
use App\Http\Controllers\backend\BeritaKategoriController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\PengumumanController;
use App\Http\Controllers\backend\PengumumanKategoriController;
use App\Http\Controllers\backend\SejarahController;
use App\Http\Controllers\backend\VisiMisiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::view('/user', 'frontend.app')->name('home');
Route::view('/berita-terbaru', 'frontend.page.berita')->name('berita-terbaru');
Route::view('/pengumuman-terbaru', 'frontend.page.pengumuman')->name('pengumuman-terbaru');
Route::get('/', function () {
    dd(Auth::user());
});

Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'login'])->name('auth.login');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:superadmin']], function () {
        Route::get('/dash', [HomeController::class, 'index'])->name('dash');
        // Routing Admin
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::get('/admin-create', [AdminController::class, 'create'])->name('admin.create');
        Route::post('/admin-update', [AdminController::class, 'update'])->name('admin.update');
        Route::post('/admin-delete', [AdminController::class, 'delete'])->name('admin.delete');
        Route::post('/admin/save', [AdminController::class, 'create'])->name('name.save');

        // Routing Kategori Pengumuman
        Route::get('/PNKategori', [PengumumanKategoriController::class, 'index'])->name('PNKategori');
        Route::get('/PNKategori-create', [PengumumanKategoriController::class, 'create'])->name('PNKategori.create');
        Route::post('/PNKategori/save', [PengumumanKategoriController::class, 'create'])->name('PNKategori.save');
        Route::post('/PNKategori-update', [PengumumanKategoriController::class, 'update'])->name('PNKategori.update');
        Route::post('/PNKategori-delete', [PengumumanKategoriController::class, 'delete'])->name('PNKategori.delete');

        // Routing Pengumuman
        Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
        Route::get('/pengumuman-create', [PengumumanController::class, 'create'])->name('pengumuman.create');
        Route::post('/pengumuman-update', [PengumumanController::class, 'update'])->name('pengumuman.update');
        Route::post('/pengumuman/save', [PengumumanController::class, 'create'])->name('pengumuman.save');
        Route::post('/pengumuman/delete', [PengumumanController::class, 'delete'])->name('pengumuman.delete');

        // Routing Berita
        Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
        Route::get('/berita-create', [BeritaController::class, 'create'])->name('berita.create');
        Route::post('/berita-save', [BeritaController::class, 'create'])->name('berita.save');
        Route::post('/berita-update', [BeritaController::class, 'update'])->name('berita.update');
        Route::post('/berita-delete', [BeritaController::class, 'delete'])->name('berita.delete');

        // Routing Kategori Berita
        Route::get('/BRKategori', [BeritaKategoriController::class, 'index'])->name('BRKategori');
        Route::get('/BRKategori-create', [BeritaKategoriController::class, 'create'])->name('BRKategori.create');
        Route::post('/BRKategori-save', [BeritaKategoriController::class, 'create'])->name('BRKategori.save');
        Route::post('/BRKategori-update', [BeritaKategoriController::class, 'update'])->name('BRKategori.update');
        Route::post('/BRKategori-delete', [BeritaKategoriController::class, 'delete'])->name('BRKategori.delete');

        Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi');
        Route::get('/visimisi/create', [VisiMisiController::class, 'create'])->name('visimisi.create');
        Route::get('/visimisi/create', [VisiMisiController::class, 'create'])->name('visimisi.create');
        Route::post('/visimisi-save', [VisiMisiController::class, 'create'])->name('visimisi.save');
        Route::post('/visimisi-update', [VisiMisiController::class, 'update'])->name('visimisi.update');
        Route::post('/visimisi/delete', [VisiMisiController::class, 'delete'])->name('visimisi.delete');

        Route::get('sejarah', [SejarahController::class, 'index'])->name('sejarah');
        Route::get('sejarah-create', [SejarahController::class, 'create'])->name('sejarah.create');
        Route::post('sejarah/save', [SejarahController::class, 'create'])->name('sejarah.save');
        Route::post('sejarah/update', [SejarahController::class, 'update'])->name('sejarah.update');
        Route::post('sejarah/delete', [SejarahController::class, 'delete'])->name('sejarah.delete');
    });
    Route::group(['middleware' => ['cek_login:admin']], function () {
        // Route::get('/admin', [HomeController::class, 'index']);
    });
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    //
});
