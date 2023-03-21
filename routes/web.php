<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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
Route::get('/', function () {
    return view('auth/login');
});

Route::get('/listacandidatos', function () {
    return view('listacandidatos');
});

Route::get('listacandidatos',[UserController::class,'show']);
Route::post('listacandidatos',[UserController::class,'AddData']);
Route::get('delete/{id}',[UserController::class,'delete']);
Route::get('update/{id}',[UserController::class,'showdata']);
Route::post('update/{id}',[UserController::class,'update']);
Route::get('view/{id}',[UserController::class,'viewrecord']);
Route::post('view/{id}',[UserController::class,'viewrecord']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
