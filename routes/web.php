<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\Guest\AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;

// Route untuk menampilkan halaman utama/form (GET)
Route::get('/home', function () {
    return view('home');
});

// Route untuk memproses form (POST)
Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');


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

//admin 
Route::get('/Admin', [AdminController::class, 'index'])->name('admin.dashboard');

//guest (partial view) - Home, Login, Register
Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('/Guest', fn () => redirect('/'));
Route::get('/auth', [GuestController::class, 'login'])->name('auth');
Route::post('/auth', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [GuestController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

//admin - CRUD (Product, Category, Customer, User)
Route::resource('product', ProductController::class)->except('show');
Route::resource('category', CategoryController::class)->except('show');
Route::resource('customer', CustomerController::class)->except('show');
Route::resource('user', UserController::class)->except('show');
