<?php

use App\Http\Controllers\Api\AcessController;
use App\Http\Controllers\Api\CatgoryContoller;
use App\Http\Controllers\Api\CodeCheckController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\ForgotPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductRatingController;
use App\Http\Controllers\Api\ResetPasswordController;
use App\Http\Controllers\Api\StoreCsvController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('products', ProductController::class);
Route::apiResource('catgory', CatgoryContoller::class);
Route::apiResource('Company', CompanyController::class);

Route::apiResource('csv', StoreCsvController::class);
Route::apiResource('User', UserController::class);
Route::get('/auth/register', [UserController::class, 'createUser']);

Route::apiResource('csv', StoreCsvController::class)->middleware('auth:sanctum');
Route::apiResource('User', UserController::class)->middleware('auth:sanctum');
Route::post('/auth/register', [UserController::class, 'createUser']);
Route::post('/auth/login', [UserController::class, 'loginUser']);

Route::post('products/{productId}/rate', [ProductRatingController::class, 'rateProduct'])->middleware('auth:sanctum');




Route::post('password/email',  ForgotPasswordController::class);
Route::post('password/code/check', CodeCheckController::class);
Route::post('password/reset', ResetPasswordController::class);
