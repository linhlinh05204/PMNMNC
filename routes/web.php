<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
});

Route::get('/test', function () {
    return response()->json("Hello");
});

Route::prefix('product')->group(function () {
        Route::get('/', function () {
            return view('product.index');
        });
        Route::get('/add', function () {
            return view('product.add');
        })->name('product.add');
        Route::get('/{id}/edit', function ($id) {
            return view('product.edit', ['id' => $id]);
        })->name('product.edit');
        Route::get('/{id?}', function (string $id="linlinh") {
            return view('product.detail', ['id' => $id]);
        })->name('product.detail');

});
Route::fallback(function () {
    return view('error.404');
});