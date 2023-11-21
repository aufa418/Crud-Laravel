<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\Models\dataSiswa;

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

// Route::resource('/', SiswaController::class, ['data' => dataSiswa::orderBy('created_at', 'desc')]);
Route::get('/', [SiswaController::class, 'index']);
Route::get('/create', [SiswaController::class, 'create']);
Route::post('/', [SiswaController::class, 'store']);
Route::get('/{id}/edit', [SiswaController::class, 'edit']);
Route::post('/{id}', [SiswaController::class, 'update']);
Route::post('/{id}/delete', [SiswaController::class, 'destroy']);