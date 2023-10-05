<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JenisSampahController;
use App\Http\Controllers\SampahController;
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
//sampah
Route::get('/', [SampahController::class, 'sampah']);
Route::post('/create-sampah', [SampahController::class, 'store']);
Route::get('/delete-sampah/{id}', [SampahController::class, 'delete']);

//login admin
Route::get('/login', [AuthController::class, 'Formlogin'])->name('login');
Route::post('/admin-login', [AuthController::class, 'adminlogin']);
//logout admin
Route::get('/logout', [AuthController::class, 'logout']);

//jenis sampah
Route::middleware(['auth:web'])->group(function () {
    Route::get('/admin/jenissampah', [JenisSampahController::class, 'index']);
    Route::post('/admin/create-jenissampah', [JenisSampahController::class, 'store']);
    Route::post('/admin/edit-jenissampah', [JenisSampahController::class, 'update']);
    Route::get('/admin/delete-jenissampah/{id}', [JenisSampahController::class, 'delete']);
});
