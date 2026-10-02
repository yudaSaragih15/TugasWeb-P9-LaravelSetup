<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

// Bonus Route Parameter (Requirement Bonus)
Route::get('/hello/{nama}', function ($nama) {
    return "Halo, " . $nama;
});