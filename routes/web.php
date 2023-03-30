<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\DataResource;
use App\Models\Data;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('login');
});

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