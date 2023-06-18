<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[UserController::class,'home'])->name('home');
Route::get('about',[UserController::class,'about'])->name('about');
Route::get('findYourRoomie',[UserController::class,'findRoomie'])->name('roomie');
Route::get('contactUs',[UserController::class,'contactUs'])->name('contactUs');
Route::post('contactUs',[UserController::class,'contactform'])->name('formCreate');
Route::get('home',[UserController::class,'home']);
Route::get('makeYourRoomie',[UserController::class,'findYouroom']);
Route::post('makeYourRoomie',[UserController::class,'fillRoomie'])->name('fillRoomie');
Route::get('colleges',[UserController::class,'college']);
Route::get('tecniaPG',[UserController::class,'tecnia_pg']);
// Route::get('tecniaPG/pgInfo',[UserController::class,'pgInfo'])->name('pgInfo');
Route::get('tecniaPg',[UserController::class,'pgInfo'])->name('pg');
