<?php

use App\Http\Controllers\Api\AcessController;
use App\Http\Controllers\Api\CatgoryContoller;
use App\Http\Controllers\Api\CobonDiscountController;
use App\Http\Controllers\Api\CodeCheckController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\OrderProdctController;
use App\Http\Controllers\Api\PillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductRatingController;
use App\Http\Controllers\Api\ResetPasswordController;
use App\Http\Controllers\Api\SerachController;
use App\Http\Controllers\Api\StoreCsvController;
use App\Models\Couppon;

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
<<<<<<< HEAD
Route::apiResource('catgory', CatgoryContoller::class);
Route::apiResource('Company', CompanyController::class);
Route::get('company-product/{companyId}', [CompanyController::class, 'getC-ompanyProducts']);
=======
Route::post('create-product', [ProductController::class, 'create']);
Route::post('update-product', [ProductController::class, 'update_product']);
Route::post('delete-product', [ProductController::class, 'destroy']);
>>>>>>> main
Route::get('latest-product', [ProductController::class, 'getProductsSortedByLatestTime']);

Route::apiResource('catgory', CatgoryContoller::class);
Route::post('create-catgory', [CatgoryContoller::class, 'create']);
Route::post('update-catgory', [CatgoryContoller::class, 'update']);
Route::post('delete-catgory', [CatgoryContoller::class, 'destroy']);
Route::get('products-in-catgory/{categoryId}', [CatgoryContoller::class, 'getCategoryProducts']);


Route::apiResource('Company', CompanyController::class);
Route::post('create-Company', [CompanyController::class, 'create']);
Route::post('update-Company', [CompanyController::class, 'update']);
Route::post('delete-Company', [CompanyController::class, 'destroy']);
Route::get('product-of-company/{companyId}', [CompanyController::class, 'getCompanyProducts']);



Route::post('store-from-csv', [StoreCsvController::class, 'uploadCSV']);



Route::get('Serach/searchByName', [SerachController::class, 'searchByName']);
Route::get('Serach/searchByPrice', [SerachController::class, 'searchByPrice']);
Route::get('Serach/searchByCategory', [SerachController::class, 'searchByCategory']);
Route::get('Serach/searchByCompany', [SerachController::class, 'searchByCompany']);


Route::apiResource('User', UserController::class)->middleware('auth:sanctum');

Route::post('/auth/register', [UserController::class, 'createUser']);
Route::apiResource('csv', StoreCsvController::class);
Route::apiResource('User', UserController::class);
Route::get('/auth/register', [UserController::class, 'createUser']);
Route::post('/auth/login', [UserController::class, 'loginUser']);


Route::post('/create-order', [OrderProdctController::class, 'createOrder'])->middleware('auth:sanctum');
Route::post('/order-time-range', [OrderProdctController::class, 'getOrdersInTimeRange'])->middleware('auth:sanctum');
Route::post('/order-on-time', [OrderProdctController::class, 'getOrdersInTime'])->middleware('auth:sanctum');
Route::apiResource('/order', OrderProdctController::class)->middleware('auth:sanctum');
Route::post('/discount', [CobonDiscountController::class, 'applyDiscount'])->middleware('auth:sanctum');
Route::get('get/profile', [UserController::class , 'show'])->middleware('auth:sanctum');

Route::post('products/{productId}/rate', [ProductRatingController::class, 'rateProduct'])->middleware('auth:sanctum');
Route::apiResource('/cobon', Couppon::class)->middleware('auth:sanctum');
Route::get('/pill/{userId}/{orderId}', [PillController::class, 'Pill'])->middleware('auth:sanctum');

Route::get('/products/valid_offers', [ProductController::class, 'productsWithValidOffers']);

Route::post('/offers/store', [OfferController::class, 'store']);

Route::delete('/offers/{offerId}', [OfferController::class, 'deleteOffer']);
Route::put('/offers/{offerId}', [OfferController::class, 'modifyOffer']);
Route::get('/offers', [OfferController::class, 'allOffersWithProductNames']);

Route::post('/send-message', [ContactController::class, 'sendMessage'])->middleware('auth:sanctum');
Route::post('/send-response/{messageId}', [ContactController::class, 'sendResponse'])->middleware('auth:sanctum');

// Route::post('password/email',  ForgotPasswordController::class);
// Route::post('password/code/check', CodeCheckController::class);
// Route::post('password/reset', ResetPasswordController::class);
