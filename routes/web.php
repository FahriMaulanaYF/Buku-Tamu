<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('Login');
})->name('login');

Route::get('/Tamu', function () {
    return redirect()->route('Tamu.Tampil');
});



// proses login
route::get('/Login', [LoginController::class, 'Login'])->name('Login');
route::post('/Login/Proses', [LoginController::class, 'Login_proses'])->name('login_proses');
route::get('/Logout', [LoginController::class, 'Logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
// proses tamu
route::get('/Tamu', [TamuController::class, 'Tampil'])->name('tamu.tampil');
route::get('/Tamu/Tambah', [TamuController::class, 'Tambah'])->name('tamu.tambah');
route::post('/Tamu/Sumbit', [TamuController::class, 'Sumbit'])->name('tamu.sumbit');
route::get('/Tamu/Edit/{id}', [TamuController::class, 'Edit'])->name('tamu.edit');
route::post('/Tamu/Update/{id}', [TamuController::class, 'Update'])->name('tamu.update');
route::post('/Tamu/Delete/{id}', [TamuController::class, 'Delete'])->name('tamu.delete');
route::get('/Tamu/Search', [TamuController::class, 'search'])->name('tamu.search');


// proses petugas
route::get('/Petugas', [PetugasController::class, 'Tampil'])->name('petugas.tampil');
route::get('/Petugas/Tambah', [PetugasController::class, 'Tambah'])->name('petugas.tambah');
route::post('/Petugas/Sumbit', [PetugasController::class, 'Sumbit'])->name('petugas.sumbit');
route::get('/Petugas/Edit/{id}', [PetugasController::class, 'Edit'])->name('petugas.edit');
route::post('/Petugas/Update/{id}', [PetugasController::class, 'Update'])->name('petugas.update');
route::post('/Petugas/Delete/{id}', [PetugasController::class, 'Delete'])->name('petugas.delete');
route::get('/Petugas/Search', [PetugasController::class, 'search'])->name('petugas.search');

});
