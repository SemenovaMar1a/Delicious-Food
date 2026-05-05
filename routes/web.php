<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'home'])->name('home');

Route::get('/menu', [BasicController::class, 'menu'])->name('menu');

Route::get('/about', [BasicController::class,'about'])->name('about');

Route::get('/contacts', [BasicController::class,'contacts'])->name('contacts');
