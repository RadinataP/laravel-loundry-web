<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\OrderController as UserOrderController;

// Halaman Awal
Route::get('/', function () {
    return view('welcome');
});

// Redirect setelah login, cek role user
Route::get('/redirect', function () {
    if (Auth::user()->role === 'admin') {
        return redirect('/admin/dashboard');
    } else {
        return redirect('/user/dashboard');
    }
})->middleware(['auth']);

// Route Group Admin
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Kelola Layanan Laundry
    Route::resource('services', ServiceController::class, ['as' => 'admin']);

    // Kelola Data Order
    Route::resource('orders', OrderController::class, ['as' => 'admin']);
});

// Route Group User
Route::prefix('user')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

    // Form Order Laundry
    Route::get('/order-laundry', [UserOrderController::class, 'create'])->name('user.orders.create');
    Route::post('/order-laundry', [UserOrderController::class, 'store'])->name('user.orders.store');

    // Riwayat Order
    Route::get('/riwayat', [UserOrderController::class, 'history'])->name('user.orders.history');
});

// Dashboard default Breeze (opsional)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route bawaan Laravel Breeze
require __DIR__.'/auth.php';
