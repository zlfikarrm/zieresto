<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Models\Kategori;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//login
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login-proses', [UserController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::resource('/menu', MenuController::class);
Route::resource('/stok', StokController::class);
Route::resource('/member', MemberController::class);
Route::resource('/jenis', JenisController::class);
Route::resource('/absensi', AbsensiController::class);
Route::resource('/kategori', KategoriController::class);
Route::resource('/meja', MejaController::class);

Route::get('export/jenis', [JenisController::class, 'exportData'])->name('export-jenis');
Route::get('export/menu', [MenuController::class, 'exportData'])->name('export-menu');
Route::get('export/stok', [StokController::class, 'exportData'])->name('export-stok');
Route::get('export/member', [MemberController::class, 'exportData'])->name('export-member');
Route::get('export/meja', [MejaController::class, 'exportData'])->name('export-meja');
Route::get('export/kategori', [KategoriController::class, 'exportData'])->name('export-kategori');

Route::post('import/kategori', [KategoriController::class, 'importData'])->name('import-kategori');
Route::post('import/meja', [MejaController::class, 'importData'])->name('import-meja');
Route::post('import/jenis', [JenisController::class, 'importData'])->name('import-jenis');
Route::post('import/menu', [MenuController::class, 'importData'])->name('import-menu');
Route::post('import/member', [MemberController::class, 'importData'])->name('import-member');
Route::post('import/stok', [StokController::class, 'importData'])->name('import-stok');

Route::resource('transaksi', TransaksiController::class);







