<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OptionController;

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

Route::redirect('/', '/admin/home');

Auth::routes();

Route::group([
    'middleware' => 'auth',
    'prefix' => 'admin'
], function() {
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::redirect('/home', '/admin/orders')->name('home');

    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/orders/export', [OrderController::class, 'export'])->name('orders.export');
    Route::get('/order/{order}/export', [OrderController::class, 'exportOrder'])->name('order.export');

    Route::get('/options', [OptionController::class, 'index'])->name('options');
    Route::post('/options', [OptionController::class, 'store']);

    Route::middleware('superadmin')->group(function() {
        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });
});

Route::get('/order', [OrderController::class, 'create'])->name('order');
Route::post('/order', [OrderController::class, 'store']);
Route::view('/order/created', 'order.created')->name('order.created');
