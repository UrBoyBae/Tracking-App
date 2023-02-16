<?php

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
Route::get('/pages/dashboard', [PageController::class, 'dashboard']);
Route::get('/pages/karyawan', [PageController::class, 'indexKaryawan']);
Route::get('/pages/absensi', [PageController::class, 'dataAbsensi']);