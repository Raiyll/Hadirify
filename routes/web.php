<?php
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('login', [AuthController::class, 'login'])
->name('post.login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/qr-scanner', function () {
    return view('qr-scanner');
})->name('qr-scanner');

Route::get('/konsultasi', function () {
    return view('konsultasi');
})->name('konsultasi');

Route::get('/pilihanguru', function () {
    return view('pilihanguru');
})->name('pilihanguru');

Route::get('/riwayatkehadiran', function () {
    return view('riwayatkehadiran');
})->name('riwayatkehadiran');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get(uri('/kalender'), function () {
    return view('kalender');
})->name('kalender');

Route::get(uri('/hukuman'), function () {
    return view('hukuman');
})->name('hukuman');







