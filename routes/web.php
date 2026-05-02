<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/monerta', function () {
    return view('layouts.app');
});

// Error Route


// Dashboard Admin Route


// Income Route


// Expense Route