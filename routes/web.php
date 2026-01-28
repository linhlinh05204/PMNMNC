<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckTimeAccess;
use App\Http\Controllers\TestController;
use App\Http\Middleware\CheckAge;

Route::get('/', function () {
    return view('home');
});

//->middleware(CheckTimeAccess::class)

Route::prefix('product')->group(function () {
        // Route::get('/', function () {
        //     return view('product.index');
        // })->name('index');
        // Route::get('/', [ProductController::class, 'index'])->name('index');
        // Route::get('/add', [ProductController::class, 'create'])->name('add');
        // Route::get('/{id}/edit', function ($id) {
        //     return view('product.edit', ['id' => $id]);
        // })->name('edit');
        // Route::get('/detail/{id?}', [ProductController::class, 'getDetail'])->name('detail');
        Route::controller(ProductController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/add', 'create')->name('add');
            Route::get('/detail/{id?}', 'getDetail')->name('detail');
            Route::post('/add', 'store')->name('store');
            // Route::get('/login', 'login')->name('login');
            // Route::post('/login', 'checkLogin')->name('checkLogin');
        });
});

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::post('/login', [ProductController::class, 'checkLogin'])->name('checkLogin');

Route::prefix('auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'checkLogin')->name('checkLogin');
    Route::get('/signin', 'signin')->name('signin');
    Route::post('/signin', 'checkSignIn')->name('checkSignIn');
    Route::get('/age', 'ageForm')->name('ageForm');
    Route::post('/age', 'saveAge')->middleware(CheckAge::class)->name('saveAge');
    });
});

Route::resource('tests', TestController::class);

Route::get('/sinhvien/{name?}/{mssv?}', function ($name = "Luong Xuan Hieu", $mssv = "123456") {
    return view('sinhvien', ['name' => $name, 'mssv' => $mssv]);
});

Route::get('/banco/{n}', function (int $n) {
    return view('banco', ['n' => $n]);
});

Route::fallback(function () {
    return view('error.404');
});