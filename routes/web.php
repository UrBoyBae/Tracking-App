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

Route::get('/', [PageController::class, 'login']);
Route::post('/login', [LoginController::class, 'loginaksi'])->name('login');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/karyawan', [PageController::class, 'indexKaryawan'])->name('karyawan');
Route::get('/absensi', [PageController::class, 'dataAbsensi'])->name('absensi');
Route::get('/cuti', [PageController::class, 'dataCuti'])->name('cuti');
Route::get('/absensi/filter',[PageController::class, 'filter'])->name('search');
Route::get('/karyawan/cari', [PageController::class, 'cari'])->name('cari');
Route::post('/karyawan/tambah', [PageController::class, 'createkar'])->name('tambah');
Route::post('/edit/{id_karyawan}', [PageController::class,'update'])->name('edit');
Route::post('/delete/{id_karyawan}', [PageController::class, 'destroy'])->name('deleteRoute');


Route::post('/edit/cuti/{id}', [PageController::class,'editCuti'])->name('editCuti');
Route::post('/delete/cuti/{id}', [PageController::class, 'deleteCuti'])->name('deleteCuti');

Route::get('/logout', [LoginController::class, 'logoutaksi'])->name('logout');
