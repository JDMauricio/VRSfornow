<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('QR-page');
});

use App\Http\Controllers\Controller;

Route::get('/register', function () {
    return view('TestRegister');
});



