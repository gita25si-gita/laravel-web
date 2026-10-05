<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatakuliahController;

use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index']);

// Route::get('/matakuliah', [MatakuliahController::class, 'index']);
// Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::post('/question-respon', function () {
    return view('home-question-respon');
});


Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');
Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show'])->name('matakuliah.show');

Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
