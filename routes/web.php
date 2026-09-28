<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

// Route untuk menampilkan halaman utama/form (GET)
Route::get('/home', function () {
    return view('home');
});

// Route untuk memproses form (POST)
Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dodi', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/mahasiswa/{profil}', function ( $profil) {
    if($profil== 'detail'){
        return view('halaman-mahasiswa-profil');
    } else if($profil== 'profil'){
        return view('halaman-mahasiswa-profil');
    }
});

Route::post('question/store', [QuestionController::class, 'store'])->name('question.store');
Route::get('/welcome', function () {
    return view('welcome');
});

