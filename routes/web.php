<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth','admin'])->group(function() {
    Route::get('/huisdier/create', [\App\Http\Controllers\HuisdierController::class, 'create']);
    Route::post('/huisdier/{id}', [\App\Http\Controllers\HuisdierController::class, 'store']);
});

Route::middleware(['auth'])->group(function() {
    Route::get('/huisdier', [\App\Http\Controllers\HuisdierController::class, 'index'])->middleware(['auth']);
    Route::get('/huisdier/{id}', [\App\Http\Controllers\HuisdierController::class, 'show']);
    Route::get('/', [\App\Http\Controllers\HuisdierController::class, 'index']);
    Route::post('/huisdier/{id}/comment', [\App\Http\Controllers\CommentController::class, 'store']);
    Route::get('/huisdier/{id}/comment', [\App\Http\Controllers\CommentController::class, 'show']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
