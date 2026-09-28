<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk /matakuliah/show/kode dan /matakuliah/show
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

// Route Resource Matakuliah (index, create, store, edit, update, destroy)
Route::resource('matakuliah', MatakuliahController::class);

Route::get('/mahasiswa/{id}', function ($id) {
    return "Halaman Mahasiswa ID: " . $id;
})->name('mahasiswa.show');

// Ubah baris 11 menjadi seperti ini:
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show'])->name('matakuliah.show');

Route::get('/home', [HomeController::class, 'index']);git Str::createUuidsUsing(callable)
