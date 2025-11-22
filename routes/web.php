<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandCampaignController;

// home
Route::get('/', [HomeController::class, 'index'])->name('home');

// tentang
Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

// layanan
Route::get('/layanan', function () {
    return view('pages.layanan');
})->name('layanan');

// blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// detail blog
Route::get('/campaign/{id}', [BlogController::class, 'show'])->name('blog-detail');

// auth
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth:client')->group(function () {
    // brand
    Route::get('/brand', [BrandCampaignController::class, 'brand'])->name('brand');
    Route::post('/brand', [BrandCampaignController::class, 'brandStore'])->name('brand.store');

    // campaign
    Route::get('/campaign', [BrandCampaignController::class, 'campaign'])->name('campaign');
    Route::post('/campaign', [BrandCampaignController::class, 'campaignStore'])->name('campaign.store');
});