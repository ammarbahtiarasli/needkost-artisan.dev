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

// Route API Login
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

// Route untuk Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/help', [HomeController::class, 'help'])->name('help');
Route::get('/riwayat-sewa', function () {
    return view('riwayat');
});

// Route untuk kamar kost
Route::get('/kost', [KostController::class, 'index'])->name('kost.index');
Route::get('/kost/detail/{kost}', [KostController::class, 'detail'])->name('kost.detail');
Route::get('/lokasi', [KostController::class, 'lokasi'])->name('lokasi');
Route::get('/lokasi/{kota}', [KostController::class, 'kota'])->name('kota');
Route::get('/lokasi/{kecamatan}', [KostController::class, 'kecamatan'])->name('kecamatan');
Route::get('/payment', [KostController::class, 'payment'])->name('payment');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk dashboard kamar kost
Route::middleware('auth')->group(function () {
    // Route::get('/kost', [DashboardKostController::class, 'index'])->name('kost.index');
    // Route::get('/kost/create', [DashboardKostController::class, 'create'])->name('kost.create');
    // Route::post('/kost', [DashboardKostController::class, 'store'])->name('kost.store');
    // Route::get('/kost/{kost}', [DashboardKostController::class, 'show'])->name('kost.show');
    // Route::get('/kost/edit/{kost}', [DashboardKostController::class, 'edit'])->name('kost.edit');
    // Route::put('/kost/update', [DashboardKostController::class, 'update'])->name('kost.update');
    // Route::delete('/kost/delete/{kost}', [DashboardKostController::class, 'destroy'])->name('kost.destroy');
    Route::resource('kost', DashboardKostController::class);
});

// Route untuk dashboard Lokasi
// Kota
Route::middleware('auth')->group(function () {
    Route::get('/kota', [KotaController::class, 'index'])->name('kota.index');
    Route::get('/kota/create', [KotaController::class, 'create'])->name('kota.create');
    Route::post('/kota', [KotaController::class, 'store'])->name('kota.store');
    Route::get('/kota/{kota}', [KotaController::class, 'show'])->name('kota.show');
    Route::get('/kota/edit/{kota}', [KotaController::class, 'edit'])->name('kota.edit');
    Route::put('/kota', [KotaController::class, 'update'])->name('kota.update');
    Route::delete('/kota/{kota}', [KotaController::class, 'destroy'])->name('kota.destroy');
});
// Kecamatan
Route::middleware('auth')->group(function () {
    Route::get('/kecamatan', [KecamatanController::class, 'index'])->name('kecamatan.index');
    Route::get('/kecamatan/create', [KecamatanController::class, 'create'])->name('kecamatan.create');
    Route::post('/kecamatan', [KecamatanController::class, 'store'])->name('kecamatan.store');
    Route::get('/kecamatan/{kecamatan}', [KecamatanController::class, 'show'])->name('kecamatan.show');
    Route::get('/kecamatan/edit/{kecamatan}', [KecamatanController::class, 'edit'])->name('kecamatan.edit');
    Route::put('/kecamatan', [KecamatanController::class, 'update'])->name('kecamatan.update');
    Route::delete('/kecamatan/{kecamatan}', [KecamatanController::class, 'destroy'])->name('kecamatan.destroy');
});

// Route untuk Pengguna
Route::middleware('auth')->group(function () {
    Route::get('/user', [DashboardUserController::class, 'index'])->name('user.index');
    // Route::get('/user/create', [DashboardUserController::class, 'create'])->name('user.create');
    Route::post('/user', [DashboardUserController::class, 'store'])->name('user.store');
    Route::get('/user/{user}', [DashboardUserController::class, 'show'])->name('user.show');
    // Route::get('/user/edit/{user}', [DashboardUserController::class, 'edit'])->name('user.edit');
    // Route::put('/user', [DashboardUserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [DashboardUserController::class, 'destroy'])->name('user.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
