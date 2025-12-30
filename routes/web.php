<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;



// ================= HALAMAN UTAMA =================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'about'])->name('about');
Route::get('/layanan', [HomeController::class, 'services'])->name('services');
Route::get('/produk/{slug}', [HomeController::class, 'detail'])->name('product.detail');
Route::get('/price-list', [HomeController::class, 'priceList'])->name('price-list');

// ================= KONTAK =================
Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');
Route::post('/kontak-kirim', [ContactController::class, 'send'])->name('contact.send');

// ================= CAPTCHA =================

Route::get('/captcha', function () {
    return captcha_img('flat');
})->name('captcha');

// reload captcha (AJAX)
Route::get('/reload-captcha', [ContactController::class, 'reloadCaptcha'])
    ->name('reload-captcha');


// ================= DEBUG =================
Route::get('/cek-gd', function () {
    return extension_loaded('gd')
        ? 'GD SUDAH AKTIF'
        : 'GD BELUM AKTIF';
});

Route::get('/cek-spasi', function () {
    return '---TEST ROUTE OK---';
});

