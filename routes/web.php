<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SalesController;
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
    Route::delete('/order/{order}', [OrderController::class, 'destroy'])->name('order.delete');
    Route::delete('/orders', [OrderController::class, 'delete'])->name('orders.delete');
    
    Route::get('/options', [OptionController::class, 'index'])->name('options');
    Route::post('/options', [OptionController::class, 'store']);

    Route::get('/clients', [ClientController::class, 'index'])->name('clients');
    Route::get('/clients/export', [ClientController::class, 'export'])->name('clients.export');
    Route::delete('/client/{client}', [ClientController::class, 'destroy'])->name('client.delete');
    Route::delete('/clients', [ClientController::class, 'delete'])->name('clients.delete');

    Route::get('/sales', [SalesController::class, 'index'])->name('sales');
    Route::get('/sales/export', [SalesController::class, 'export'])->name('sales.export');
    Route::delete('/sale/{sale}', [SalesController::class, 'destroy'])->name('sale.delete');
    Route::delete('/sales', [SalesController::class, 'delete'])->name('sales.delete');


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

Route::get('/client', [ClientController::class, 'create'])->name('client');
Route::post('/client', [ClientController::class, 'store']);

Route::get('/sales', [SalesController::class, 'create'])->name('sale');
Route::post('/sales', [SalesController::class, 'store']);

Route::view('/link-tree', 'linktree');