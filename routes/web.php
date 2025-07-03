<?php
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');      

// Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('/login', function () {
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

Route::get(('/kalender'), function () {
    return view('kalender');
})->name('kalender');

Route::get(('/hukuman'), function () {
    return view('hukuman');
})->name('hukuman');

Route::resource('profile', ProfileController::class);
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});









