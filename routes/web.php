<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KostController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\Dashboard\DashboardKostController;
use App\Http\Controllers\Dashboard\DashboardLokasiController;
use App\Http\Controllers\Dashboard\DashboardUserController;
use App\Http\Controllers\Dashboard\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route untuk kamar kost
Route::get('/kosts', [KostController::class, 'index'])->name('kosts.index');
Route::get('/kost/detail/{kost}', [KostController::class, 'detail'])->name('kost.detail');
Route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi');
Route::get('/lokasi/kota', [LokasiController::class, 'kotas'])->name('kotas');
Route::get('/lokasi/kota/{kota}', [LokasiController::class, 'kota'])->name('kota');
Route::get('/lokasi/provinsi', [LokasiController::class, 'provinsis'])->name('provinsis');
Route::get('/lokasi/provinsi/{provinsi}', [LokasiController::class, 'provinsi'])->name('provinsi');

// Route untuk login user
Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile-guest', [ProfileController::class, 'editGuest'])->name('profile.edit-guest');
    Route::get('/after-regis', [ProfileController::class, 'afterRegis'])->name('profile.after-regis');
    Route::patch('/after-regis', [ProfileController::class, 'updateAfterRegis'])->name('profile.update-after-regis');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Payment
    Route::get('/payment', [KostController::class, 'payment'])->name('payment');
    Route::get('/riwayat', [KostController::class, 'history'])->name('history');
    Route::get('/invoice/{invoice}', [KostController::class, 'invoice'])->name('invoice');
    Route::get('/print/{invoice}', [KostController::class, 'print'])->name('invoice.print');
});

Route::middleware(['auth', 'admin'])->group(function () {
    // Route untuk Pengguna
    Route::get('/user', [DashboardUserController::class, 'index'])->name('user.index');
    Route::post('/user', [DashboardUserController::class, 'store'])->name('user.store');
    Route::get('/user/{user}', [DashboardUserController::class, 'show'])->name('user.show');
    Route::delete('/user/{user}', [DashboardUserController::class, 'destroy'])->name('user.destroy');
});

// Route untuk dashboard kamar kost
Route::middleware(['auth', 'role'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route untuk crud kost
    Route::resource('kost', DashboardKostController::class);

    // Route untuk dashboard Lokasi
    Route::get('/lokasi/table', [DashboardLokasiController::class, 'index'])->name('lokasi.index');
    Route::get('/lokasi/table/search', [DashboardLokasiController::class, 'search'])->name('lokasi.search');
    Route::get('/lokasi/table/{provinsi}', [DashboardLokasiController::class, 'perProvinsi'])->name('lokasi.provinsi');
});

require __DIR__ . '/auth.php';
