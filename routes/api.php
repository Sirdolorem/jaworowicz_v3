<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EntryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::post('/entries/create', [EntryController::class, 'createEntry'])->middleware('auth:sanctum');
Route::get('/entries/all', [EntryController::class, 'all'])->middleware('auth:sanctum');
Route::post('/entries/delimer', [EntryController::class, 'delimer'])->middleware('auth:sanctum');
Route::post('/entries/delete', [EntryController::class, 'delete'])->middleware('auth:sanctum');

