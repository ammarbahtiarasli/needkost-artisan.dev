<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KostController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\Dashboard\DashboardKostController;
use App\Http\Controllers\Dashboard\DashboardKotaController;
use App\Http\Controllers\Dashboard\DashboardUserController;


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

// Route untuk Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{slug}', [HomeController::class, 'detail'])->name('detail');
Route::get('/payment', [HomeController::class, 'payment'])->name('payment');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/help', [HomeController::class, 'help'])->name('help');
Route::get('/lokasi', [HomeController::class, 'lokasi'])->name('lokasi');
Route::get('/kota/{kota}', [HomeController::class, 'kota'])->name('kota');
// Route::get('/{username}', [HomeController::class, 'profile'])->name('profile');

// Route API Login
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/manage-kosts', [DashboardKostController::class, 'index'])->middleware(['auth', 'verified'])->name('kosts');
Route::get('/manage-kota', [DashboardKotaController::class, 'index'])->middleware(['auth', 'verified'])->name('kotas');
Route::get('/manage-user', [DashboardUserController::class, 'index'])->middleware(['auth', 'verified'])->name('users');


// Route untuk kamar kost
Route::middleware('auth')->group(function () {
    Route::get('/kost', [KostController::class, 'index'])->name('kost.index');
    Route::get('/kost/create', [KostController::class, 'create'])->name('kost.create');
    Route::post('/kost', [KostController::class, 'store'])->name('kost.store');
    Route::get('/kost/{kost}', [KostController::class, 'show'])->name('kost.show');
    Route::get('/kost/edit/{kost}', [KostController::class, 'edit'])->name('kost.edit');
    Route::put('/kost', [KostController::class, 'update'])->name('kost.update');
    Route::delete('/kost/{kost}', [KostController::class, 'destroy'])->name('kost.destroy');
});

// Route untuk Pengguna
Route::middleware('auth')->group(function () {
    Route::get('/user', [ProfileController::class, 'index'])->name('user.index');
    // Route::get('/user/create', [ProfileController::class, 'create'])->name('user.create');
    Route::post('/user', [ProfileController::class, 'store'])->name('user.store');
    Route::get('/user/{user}', [ProfileController::class, 'show'])->name('user.show');
    // Route::get('/user/edit/{user}', [ProfileController::class, 'edit'])->name('user.edit');
    // Route::put('/user', [ProfileController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [ProfileController::class, 'destroy'])->name('user.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk Lokasi
Route::middleware('auth')->group(function () {
    Route::get('/kota', [KotaController::class, 'index'])->name('kota.index');
    Route::get('/kota/create', [KotaController::class, 'create'])->name('kota.create');
    Route::post('/kota', [KotaController::class, 'store'])->name('kota.store');
    Route::get('/kota/{kota}', [KotaController::class, 'show'])->name('kota.show');
    Route::get('/kota/edit/{kota}', [KotaController::class, 'edit'])->name('kota.edit');
    Route::put('/kota', [KotaController::class, 'update'])->name('kota.update');
    Route::delete('/kota/{kota}', [KotaController::class, 'destroy'])->name('kota.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/kecamatan', [KecamatanController::class, 'index'])->name('kecamatan.index');
    Route::get('/kecamatan/create', [KecamatanController::class, 'create'])->name('kecamatan.create');
    Route::post('/kecamatan', [KecamatanController::class, 'store'])->name('kecamatan.store');
    Route::get('/kecamatan/{kecamatan}', [KecamatanController::class, 'show'])->name('kecamatan.show');
    Route::get('/kecamatan/edit/{kecamatan}', [KecamatanController::class, 'edit'])->name('kecamatan.edit');
    Route::put('/kecamatan', [KecamatanController::class, 'update'])->name('kecamatan.update');
    Route::delete('/kecamatan/{kecamatan}', [KecamatanController::class, 'destroy'])->name('kecamatan.destroy');
});

require __DIR__ . '/auth.php';
