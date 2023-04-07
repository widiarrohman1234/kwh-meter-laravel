<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\DataResource;
use App\Models\Data;
use App\Http\Controllers\DataController;

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

Route::get('admin/user', function () {
    return view('pages/admin/user');
});

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
