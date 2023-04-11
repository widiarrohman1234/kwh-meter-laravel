<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\DataResource;
use App\Models\Data;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;

Route::get('index', function () {
    return view('index');
});

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



//front end user
Route::get('user/home', function () {
    return view('pages/user/home_user');
});
Route::get('user/data', function () {
    return view('pages/user/data');
});
Route::get('user/bangunan', function () {
    return view('pages/user/bangunan');
});
Route::get('user/ruangan', function () {
    return view('pages/user/ruangan');
});
