<?php

use App\Http\Controllers\EtkinlikEkleController;
use App\Http\Controllers\KonumBilgisiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pages/login', [LoginController::class, 'login']);
Route::get('pages/page-table-listing', [KonumBilgisiController::class, 'index']);
Route::get('pages/dashboard', [EtkinlikEkleController::class, 'index']);
