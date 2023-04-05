<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/profil', [ProfileController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);