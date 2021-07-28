<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('index');


// Route Mata Pelajaran
Route::get('/mapel', [MapelController::class, 'index']);
Route::post('/mapel', [MapelController::class, 'store']);
Route::get('/mapel/tambah', [MapelController::class, 'create']);
Route::post('/mapel/update/{id}', [MapelController::class, 'update']);
Route::get('/mapel/detail/{id}', [MapelController::class, 'detail']);
Route::get('/mapel/edit/{id}', [MapelController::class, 'edit']);
Route::get('/mapel/delete/{id}', [MapelController::class, 'destroy']);


// Route Guru
Route::get('/guru', [GuruController::class, 'index'])->name('index');
Route::post('/guru', [GuruController::class, 'store']);
Route::get('/guru/tambah', [GuruController::class, 'create'])->name('create');
Route::post('/update/{id}', [GuruController::class, 'update'])->name('update');
Route::get('/guru/detail/{id}', [GuruController::class, 'detail'])->name('detail');
Route::get('/guru/edit/{id}', [GuruController::class, 'edit'])->name('edit');
Route::get('/guru/delete/{id}', [GuruController::class, 'destroy'])->name('destroy');


// Route Siswa
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/tambah', [SiswaController::class, 'create']);
Route::post('/siswa/add', [SiswaController::class, 'store']);

