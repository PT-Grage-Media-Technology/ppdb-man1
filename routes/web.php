<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\ListPesertaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::get('/', function () {
    return redirect('/login');
});

// Register
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register-post', [RegisterController::class, 'register'])->name('register-post');
// Notif berhasil register
Route::get('notif', [RegisterController::class, 'notif'])->name('notif')->middleware('auth');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login-post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// forgot password
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// formulir pendaftaran
Route::get('formulir-pendaftaran', [FormulirController::class, 'index'])->name('formulir-pendaftaran')->middleware('auth');
Route::post('formulir-pendaftaran-post', [FormulirController::class, 'store'])->name('formulir-pendaftaran-post')->middleware('auth');

// data peserta didik baru
Route::get('list-peserta', [ListPesertaController::class, 'index'])->name('list-peserta')->middleware('auth');
Route::get('/print-form', [FormulirController::class, 'printForm'])->name('print.form')->middleware('auth');

Route::get('/terima/{user_id}', [ListPesertaController::class, 'terima'])->name('terima')->middleware('auth');
Route::get('/tolak/{user_id}', [ListPesertaController::class, 'tolak'])->name('tolak')->middleware('auth');
