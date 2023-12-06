<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// User
Route::get('/', [HomeController::class, 'index']);

Route::get('/detail', function () {
    return view('kost.detail-kost');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/kota', function () {
    return view('kota.index');
});
Route::get('/username', function () {
    return view('profile-user');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/manage-kosts', function () {
    return view('dashboard.kost.index');
})->middleware(['auth', 'verified'])->name('kosts');
Route::get('/create-kost', function () {
    return view('dashboard.kost.create');
})->middleware(['auth', 'verified'])->name('create-kosts');
Route::get('/manage-kota', function () {
    return view('dashboard.kota.index');
})->middleware(['auth', 'verified'])->name('kota');
Route::get('/manage-user', function () {
    return view('dashboard.user.index');
})->middleware(['auth', 'verified'])->name('kota');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
