<?php

use App\Http\Controllers\EtkinlikEkleController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KonumBilgisiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']); #index page
Route::get('pages/login', [LoginController::class, 'login']); #login page
Route::get('pages/page-table-listing', [KonumBilgisiController::class, 'index']); #konum bilgisi page
Route::get('pages/dashboard', [EtkinlikEkleController::class, 'index']); #etkinlik ekle page
Route::post('pages/dashboard', [EtkinlikEkleController::class, 'etkinlikEkle']); #etkinlik ekleme islemi
Route::get('pages/dashboard/{id}', [EtkinlikEkleController::class, 'etkinlikSil']); #etkinlik silme islemi
