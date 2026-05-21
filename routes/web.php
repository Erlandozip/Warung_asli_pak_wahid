<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MenuController;
use App\http\Controllers\PesananController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function() {
    return view('menu');
});
Route::view('/menu', 'menu');

Route::get('/pesanananda', function() {
    return view('pesanananda');
});

Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/pesanananda', [PesananController::class, 'index'])->name('pesanananda');
Route::post('/prosespesanan', [PesananController::class, 'proses'])->name('pesanan.proses');
