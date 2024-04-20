<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CarsController;
use App\Http\Controllers\AuthController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('cars', [CarsController::class, 'index'])->name('cars.index');
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register.index');
Route::post('register/action', [AuthController::class, 'registerPost'])->name('register');
