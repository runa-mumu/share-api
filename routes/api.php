<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SharesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LikesController;

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

Route::apiResource('/Shares', SharesController::class);
Route::post('register', [RegisterController::class,'post']);
Route::post('/login', [LoginController::class, 'post']);
Route::post('/logout', [LogoutController::class, 'post']);
Route::get('/user', [UsersController::class, 'get']);
Route::put('/user', [UsersController::class, 'put']);
Route::post('/like', [LikesController::class, 'post']);
Route::delete('/like', [LikesController::class, 'delete']);
Route::post('/comment', [CommentsController::class, 'post']);




