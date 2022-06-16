<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';


Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/store', [UserController::class, 'store']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/update/{id}', [UserController::class, 'update']);
    Route::get('/delete/{id}', [UserController::class, 'delete']);
});

Route::prefix('cars')->group(function () {
    Route::get('/', [CarController::class, 'index']);
    Route::get('/create', [CarController::class, 'create']);
    Route::post('/store', [CarController::class, 'store']);
    Route::get('/edit/{id}', [CarController::class, 'edit']);
    Route::post('/update/{id}', [CarController::class, 'update']);
    Route::get('/delete/{id}', [CarController::class, 'delete']);
});
