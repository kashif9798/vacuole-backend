<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MicrobeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\SubCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/categories',[CategoryController::class, 'index']);
Route::get('/categories/{category}',[CategoryController::class, 'microbes']);

Route::get('/sub-categories/{subCategory}',[SubCategoryController::class, 'microbes']);


Route::get('/microbes', [MicrobeController::class, 'index']);
Route::get('/microbes/{microbe}', [MicrobeController::class, 'show']);

Route::post('/login',[AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);

Route::get('/collection', [CollectionController::class, 'index']);
Route::get('/collect/{microbe}', [CollectionController::class, 'collect']);
Route::get('/decollect/{microbe}', [CollectionController::class, 'decollect']);
