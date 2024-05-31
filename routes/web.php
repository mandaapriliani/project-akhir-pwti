<?php

use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers::class, 'index'] );

Route::get('/index', [Controllers::class, 'index'] )->name('index');

Route::get('/add', function () {
    return view('add');
});

Route::post('/tambahData', [Controllers::class, 'tambahData'])->name('tambahData');

Route::get('/showData/{id}', [Controllers::class, 'showData'])->name('showData');

Route::post('/editData/{id}', [Controllers::class, 'editData'])->name('editData');

Route::get('/hapusData/{id}', [Controllers::class, 'hapusData'])->name('hapusData');



