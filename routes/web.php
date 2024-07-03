<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\KategoriBukuUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\BukuPinjamController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [KategoriBukuUserController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::get('/peminjamanbuku', function () {
//     return view('peminjaman');
// })->middleware(['auth', 'verified'])->name('peminjaman');
// Route::get('/peminjaman', function () {
//     return view('peminjaman');
// })->middleware(['auth', 'verified'])->name('peminjaman');

Route::get('/koleksi/{id_kategori}/buku', [KategoriBukuUserController::class, 'bukuByKategori'])
    ->name('koleksi')

    ->middleware(['auth', 'verified']);

Route::get('/pinjam/{id_buku}', [KategoriBukuUserController::class, 'pinjam'])
    ->name('pinjam')
    ->middleware(['auth', 'verified']);

Route::post('/submit/{id_buku}', [KategoriBukuUserController::class, 'submit'])
    ->name('submit')
    ->middleware(['auth', 'verified']);

Route::post('/peminjaman/{id_buku}', [BukuPinjamController::class, 'index'])
    ->name('peminjaman')
    ->middleware(['auth', 'verified']);

Route::post('/submit/{id_buku}', [BukuPinjamController::class, 'submit'])
    ->name('submit')
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('daftarpinjam', [PeminjamanController::class, 'userindex'])->name('daftarpinjam');
});

Route::middleware('auth', 'admin')->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index']);
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/KategoriBuku', [KategoriBukuController::class, 'index'])->name('admin.KategoriBuku');
    Route::get('/admin/KategoriBuku/create', [KategoriBukuController::class, 'create'])->name('admin.KategoriBuku.create');
    Route::post('/admin/KategoriBuku/submit', [KategoriBukuController::class, 'submit'])->name('admin.KategoriBuku.submit');
    Route::get('/admin/KategoriBuku/edit/{id_kategori}', [KategoriBukuController::class, 'edit'])->name('admin.KategoriBuku.edit');
    Route::post('/admin/KategoriBuku/update/{id_kategori}', [KategoriBukuController::class, 'update'])->name('admin.KategoriBuku.update');
    Route::post('/admin/KategoriBuku/delete/{id_kategori}', [KategoriBukuController::class, 'delete'])->name('admin.KategoriBuku.delete');

    Route::get('/admin/Buku', [BukuController::class, 'index'])->name('admin.Buku');
    Route::get('/admin/Buku/manage', [BukuController::class, 'tampil'])->name('admin.Buku.manage');
    Route::get('/admin/Buku/create', [BukuController::class, 'create'])->name('admin.Buku.create');
    Route::post('/admin/Buku/submit', [BukuController::class, 'submit'])->name('admin.Buku.submit');
    Route::get('/admin/Buku/edit/{id_buku}', [BukuController::class, 'edit'])->name('admin.Buku.edit');
    Route::post('/admin/Buku/update/{id_buku}', [BukuController::class, 'update'])->name('admin.Buku.update');
    Route::post('/admin/Buku/delete/{id_buku}', [BukuController::class, 'delete'])->name('admin.Buku.delete');

    Route::get('/admin/User', [UserController::class, 'index'])->name('admin.User');
    Route::get('/admin/User/manage', [UserController::class, 'tampil'])->name('admin.User.manage');
    Route::get('/admin/User/create', [UserController::class, 'create'])->name('admin.User.create');
    Route::post('/admin/User/submit', [UserController::class, 'submit'])->name('admin.User.submit');
    Route::get('/admin/User/edit/{id}', [UserController::class, 'edit'])->name('admin.User.edit');
    Route::post('/admin/User/update/{id}', [UserController::class, 'update'])->name('admin.User.update');
    Route::post('/admin/User/delete/{id}', [UserController::class, 'delete'])->name('admin.User.delete');

    Route::get('/admin/Peminjaman', [PeminjamanController::class, 'index'])->name('admin.Peminjaman');
    Route::get('/admin/Peminjaman/manage', [PeminjamanController::class, 'index'])->name('admin.Peminjaman.manage');
    Route::get('/admin/Peminjaman/create', [PeminjamanController::class, 'create'])->name('admin.Peminjaman.create');
    Route::post('/admin/Peminjaman/submit', [PeminjamanController::class, 'submit'])->name('admin.Peminjaman.submit');
    Route::get('/admin/Peminjaman/edit/{id}', [PeminjamanController::class, 'edit'])->name('admin.Peminjaman.edit');
    Route::post('/admin/Peminjaman/update/{id}', [PeminjamanController::class, 'update'])->name('admin.Peminjaman.update');
    Route::post('/admin/Peminjaman/delete/{id}', [PeminjamanController::class, 'delete'])->name('admin.Peminjaman.delete');
});

require __DIR__ . '/auth.php';

// Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
