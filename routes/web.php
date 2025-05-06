<?php
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('login');
})->name('login');      

// Route::get('login', [AuthController::class, 'login'])->name('login');

Route::post('login', [AuthController::class, 'login'])
->name('post.login'); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/qr-scanner', function () {
    return view('qr-scanner');
})->name('qr-scanner');





