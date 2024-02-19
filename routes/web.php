<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index']);
Route::post('login-user', [AuthController::class, 'login'])->name('login');

Route::middleware(['web', 'CheckLogin'])->group(function () {
    Route::get('menu', [MenuController::class, 'index']);
    Route::get('menu/create', [MenuController::class, 'indexCreate']);
    Route::post('menu/create', [MenuController::class, 'create'])->name('create-menu');
    Route::get('menu/edit/{id}', [MenuController::class, 'indexEdit']);
    Route::put('menu/edit/{id}', [MenuController::class, 'edit'])->name('edit-menu');
    Route::delete('menu/delete/{id}', [MenuController::class, 'delete'])->name('delete-menu');
    
    Route::get('meja', [MejaController::class, 'index']);
    Route::get('meja/create', [MejaController::class, 'indexCreate']);
    Route::post('meja/create', [MejaController::class, 'create'])->name('create-meja');
    Route::get('meja/edit/{id}', [MejaController::class, 'indexEdit']);
    Route::put('meja/edit/{id}', [MejaController::class, 'edit'])->name('edit-meja');
    Route::delete('meja/delete/{id}', [MejaController::class, 'delete'])->name('delete-meja');
    
    Route::get('pesanan', [PesananController::class, 'index']);
    Route::get('pesanan/create', [PesananController::class, 'create'])->name('create-pesanan');

    Route::get('laporan', [LaporanController::class, 'index']);

    Route::get('logout-user', [AuthController::class, 'logout'])->name('logout');
});
