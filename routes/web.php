<?php

use App\Http\Controllers\MenuController;
use App\http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/menu', function() {
    return view('menu');
});

Route::POST('/proses-pesanan', function (Request $request){
    Session([
        'makanan_pilih' => $request->input('makanan'),
        'minuman_pilih' => $request->input('minuman')
    ]);
    return redirect('/pesanananda');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/welcome', [MenuController::class, 'index'])->name('welcome');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/pesanananda', [PesananController::class, 'index'])->name('pesanan');

