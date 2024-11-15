<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pages\indexController;

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

Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/tatap-muka', [indexController::class, 'detail'])->name('detail');
Route::get('/syarat-ketentuan', [indexController::class, 'syarat'])->name('syarat');
Route::get('/registrasi', [indexController::class, 'registrasi'])->name('registrasi');