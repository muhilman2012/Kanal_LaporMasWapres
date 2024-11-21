<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pages\indexController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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
Route::get('/registrasi', [indexController::class, 'reservasi'])->name('reservasi');

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/')
            ->setPriority(1.0)
            ->setChangeFrequency('daily'))
        ->add(Url::create('/tatap-muka')
            ->setPriority(0.8)
            ->setChangeFrequency('weekly'))
        ->add(Url::create('/registrasi')
            ->setPriority(0.9)
            ->setChangeFrequency('weekly'));

    return $sitemap->toResponse(request());
});