<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'login'])->name('login.page')->middleware('preventBackHistory');
Route::get('/login', [LoginController::class, 'login'])->name('login.page')->middleware('guest');
Route::post('/login', [LoginController::class, 'loginaksi'])->name('login')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logoutaksi'])->name('logout')->middleware('custom.auth');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard')->middleware('custom.auth');

Route::get('/karyawan', [PageController::class, 'indexKaryawan'])->name('karyawan')->middleware('custom.auth');
Route::get('/karyawan/cari', [PageController::class, 'cari'])->name('cari')->middleware('custom.auth');
Route::post('/karyawan/tambah', [PageController::class, 'createkar'])->name('tambah')->middleware('custom.auth');
Route::post('/edit/{id_karyawan}', [PageController::class, 'update'])->name('edit')->middleware('custom.auth');
Route::post('/delete/{id_karyawan}', [PageController::class, 'destroy'])->name('deleteRoute')->middleware('custom.auth');
Route::post('/karyawan/reset-cuti', [PageController::class, 'reset'])->name('reset')->middleware('custom.auth');

Route::get('/absensi', [PageController::class, 'dataAbsensi'])->name('absensi')->middleware('custom.auth');
Route::get('/absensi/filter', [PageController::class, 'filter'])->name('search')->middleware('custom.auth');

Route::get('/cuti', [PageController::class, 'dataCuti'])->name('cuti')->middleware('custom.auth');
Route::post('/edit/cuti/{id}', [PageController::class, 'editCuti'])->name('editCuti')->middleware('custom.auth');
Route::post('/delete/cuti/{id}', [PageController::class, 'deleteCuti'])->name('deleteCuti')->middleware('custom.auth');

Route::middleware(['auth', 'preventBackHistory'])->group(function () {
    // routes that require authentication
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard')->middleware('custom.auth');
    Route::get('/karyawan', [PageController::class, 'indexKaryawan'])->name('karyawan')->middleware('custom.auth');
    Route::get('/absensi', [PageController::class, 'dataAbsensi'])->name('absensi')->middleware('custom.auth');
    Route::get('/cuti', [PageController::class, 'dataCuti'])->name('cuti')->middleware('custom.auth');
    
});
