<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('/login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('/admin')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');
    Route::get('/pemesanan', [AdminController::class, 'indexPemesanan'])->name('index.pemesanan');
    Route::post('/store/pemesanan', [AdminController::class, 'storePemesanan'])->name('store.pemesanan');
    Route::get('/ongoing', [AdminController::class, 'indexOngoing'])->name('index.ongoing');
    Route::get('/update/ongoing', [AdminController::class, 'updateOngoing'])->name('update.ongoing');
});

Route::prefix('/user')->middleware(['auth', 'user'])->group(function () {
    Route::get('/persetujuan-pemesanan', [UserController::class, 'index'])->name('user');
    Route::post('/update/persetujuan-pemesanan', [UserController::class, 'update'])->name('update.persetujuan');
});

Route::get('/tes', [AdminController::class, 'tes']);