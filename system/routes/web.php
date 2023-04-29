<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\DataResource;
use App\Models\Data;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\RuanganController;

//login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('/post/{slug}', [DataController::class, 'show']);
// Route::get('/data', function () {
//     return new DataResource(Data::all());
// });

// Route::get('/create', function () {
//     return new DataResource(Data::all());
// });


//front end admin
Route::get('/', function () {
    return view('pages/login');
});

Route::get('admin/home', function () {
    return view('pages/admin/home_admin');
});

Route::get('admin/user/', [UserController::class, 'index']);
Route::get('admin/user/create', [UserController::class, 'create']);
Route::post('admin/user', [UserController::class, 'store']);
Route::get('admin/user/edit/{id}', [UserController::class, 'edit']);
Route::get('admin/user/edit/{id}', [UserController::class, 'edit']);
Route::put('admin/user/edit/{id}', [UserController::class, 'update']);
Route::delete('admin/user/destroy/{id}', [UserController::class, 'destroy']);


// user/bangunan
Route::get('user/bangunan', [BangunanController::class, 'index']);
Route::get('user/bangunan/create', [BangunanController::class, 'create']);
Route::post('user/bangunan',[BangunanController::class,'store']);
Route::get('user/bangunan/edit/{id}', [BangunanController::class, 'edit']);
Route::put('user/bangunan/{id}', [BangunanController::class, 'update']);
Route::delete('user/bangunan/destroy/{id}', [BangunanController::class, 'destroy']);

// user/ruangan
Route::get('user/ruangan', [RuanganController::class, 'index']);
Route::get('user/ruangan/create', [RuanganController::class, 'create']);
Route::post('user/ruangan',[RuanganController::class,'store']);
Route::get('user/ruangan/edit/{id}', [RuanganController::class, 'edit']);
Route::put('user/ruangan/{id}', [RuanganController::class, 'update']);
Route::delete('user/ruangan/destroy/{id}', [RuanganController::class, 'destroy']);

Route::get('user/home', function () {
    return view('pages/user/home_user');
});
Route::get('user/data', function () {
    return view('pages/user/data');
});

Route::get('user/ruangan', function () {
    return view('pages/user/ruangan');
});
