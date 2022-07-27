<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Daftar_belanjaController;
use App\Http\Controllers\PegawaiController;

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



Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('home');
    });
    //Data Rekening
    Route::get('/daftar_belanja', [Daftar_belanjaController::class, 'index']); //menampilkan
    Route::get('/daftar_belanja/create', [Daftar_belanjaController::class, 'create']); //menambhakan data
    Route::post('/daftar_belanja/store', [Daftar_belanjaController::class, 'store']); //menambhakan data
    Route::get('/daftar_belanja/{id}/edit', [Daftar_belanjaController::class, 'edit']); //menambhakan data di Edit
    Route::put('/daftar_belanja/{id}', [Daftar_belanjaController::class, 'update']); //mengedit data
    Route::delete('/daftar_belanja/{id}', [Daftar_belanjaController::class, 'destroy']); //Menghapus data


    //Data Pegawai
    Route::get('/pegawai', [PegawaiController::class, 'index']); //menampilkan
    Route::get('/pegawai/create', [PegawaiController::class, 'create']); //menambhakan data
    Route::post('/pegawai/store', [PegawaiController::class, 'store']); //menambhakan data
    Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit']); //menambhakan data di Edit
    Route::put('/pegawai/{id}', [PegawaiController::class, 'update']); //mengedit data
    Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy']); //Menghapus data





});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
