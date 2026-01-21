<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('product')->group(function () {
        Route::get('/', function () {
            return view('product.index');
        })->name('index');
        Route::get('/add', function () {
            return view('product.add');
        })->name('add');
        Route::get('/{id}/edit', function ($id) {
            return view('product.edit', ['id' => $id]);
        })->name('edit');
        Route::get('/{id?}', function (string $id="linlinh") {
            return view('product.detail', ['id' => $id]);
        })->name('detail');

});

Route::get('/sinhvien/{name?}/{mssv?}', function ($name = "Luong Xuan Hieu", $mssv = "123456") {
    return view('sinhvien', ['name' => $name, 'mssv' => $mssv]);
});

Route::get('/banco/{n}', function ($n) {
    return view('banco', ['n' => $n]);
});

Route::fallback(function () {
    return view('error.404');
});