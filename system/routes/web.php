<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\DataResource;
use App\Models\Data;
use App\Http\Controllers\DatakwhController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\RuanganController;

//login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::prefix('admin')->group(function () {
    // home
    Route::get('home', function () {
        return view('pages/admin/home_admin');
    });
    // user
    Route::get('user/', [UserController::class, 'index']);
    Route::get('user/create', [UserController::class, 'create']);
    Route::post('user', [UserController::class, 'store']);
    Route::get('user/edit/{id}', [UserController::class, 'edit']);
    Route::get('user/edit/{id}', [UserController::class, 'edit']);
    Route::put('user/edit/{id}', [UserController::class, 'update']);
    Route::delete('user/destroy/{id}', [UserController::class, 'destroy']);
});

Route::prefix('user')->group(function () {
    // home
    Route::get('home', function () {
        return view('pages/user/home_user');
    });
    // bangunan
    Route::controller(BangunanController::class)->group(function () {
        Route::get('bangunan', [BangunanController::class, 'index']);
        Route::get('bangunan/create', [BangunanController::class, 'create']);
        Route::post('bangunan', [BangunanController::class, 'store']);
        Route::get('bangunan/edit/{id}', [BangunanController::class, 'edit']);
        Route::put('bangunan/{id}', [BangunanController::class, 'update']);
        Route::delete('bangunan/destroy/{id}', [BangunanController::class, 'destroy']);
    });

    // ruangan
    Route::controller(RuanganController::class)->group(function () {
        Route::get('ruangan', 'index');
        Route::get('ruangan/create', 'create');
        Route::post('ruangan', 'store');
        Route::get('ruangan/edit/{id}', 'edit');
        Route::put('ruangan/{id}', 'update');
        Route::delete('ruangan/destroy/{id}', 'destroy');
    });
});


// user/data
Route::get('user/data', [DatakwhController::class, 'index']);
Route::get('/post/{slug}', [DataController::class, 'show']);
