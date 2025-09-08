<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard', ['name' => 'Dashboard']);
});

Route::get('/Peminjam', function () {
    return view('Peminjam', ['name' => 'Peminjam']);
});
