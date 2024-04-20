<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CarsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\ReturnController;


Route::get('cars', [CarsController::class, 'index'])->name('cars.index');
Route::get('cars/create', [CarsController::class, 'create'])->name('cars.create');
Route::post('cars/create', [CarsController::class, 'store'])->name('cars.store');  
Route::get('/login', [AuthController::class, 'login'])->name('login.index');
Route::post('login', [AuthController::class, 'loginPost'])->name('login');  
Route::get('register', [AuthController::class, 'register'])->name('register.index');
Route::post('register/action', [AuthController::class, 'registerPost'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('home', [HomeController::class, 'index'])->name('home.index');
Route::get('/cars/search', [HomeController::class, 'search'])->name('cars.search');
Route::get('/cars/{id}/booking', [BookingController::class, 'index'])->name('cars.booking');
Route::post('cars/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/cars/rental', [BookingController::class, 'carsRental'])->name('rental_listing');
Route::get('/cars/return', [ReturnController::class, 'showReturnForm'])->name('return_mobile');
Route::post('/cars/return', [ReturnController::class, 'processReturn'])->name('process_return');
