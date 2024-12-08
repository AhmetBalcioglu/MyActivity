<?php

use App\Http\Controllers\EtkinlikEkleController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KonumBilgisiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('pages/login', [LoginController::class, 'login']);
Route::get('pages/page-table-listing', [KonumBilgisiController::class, 'index']);
Route::get('pages/dashboard', [EtkinlikEkleController::class, 'index']);
Route::post('pages/dashboard', [EtkinlikEkleController::class, 'etkinlikEkle']);
