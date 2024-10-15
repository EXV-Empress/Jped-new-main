<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//API CONTROLLERS
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ForgotPasswordController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\AddressController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\ProductsController;
use App\Http\Controllers\API\OtherProducts;


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

//AUTHENTICATION
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/reset-password', [ForgotPasswordController::class, 'reset']);

//PROFILE STUFF //
// INDEXES
Route::get('/profile/address-index', [AddressController::class, 'index']);
Route::get('/profile/bought-index', [ProductsController::class, 'index_bought']);
Route::get('/profile/refunded-index', [ProductsController::class, 'index_refunded']);
Route::get('/profile/cancelled-index', [ProductsController::class, 'index_cancelled']);

Route::delete('/profile/address-delete/{id}', [AddressController::class, 'destroy']);
Route::post('/profile/address-create', [AddressController::class, 'store'])->middleware('auth:sanctum');
Route::post('/profile/update-profile', [ProfileController::class, 'update_profile'])->middleware('auth:sanctum');
Route::post('/profile/change-password', [ProfileController::class, 'change_password'])->middleware('auth:sanctum');

Route::post('/profile/products-refund/{id}', [ProductsController::class, 'refund'])->middleware('auth:sanctum');
Route::post('/profile/products-cancel/{id}', [ProductsController::class, 'cancel'])->middleware('auth:sanctum');

// CART FUNCTIONS //
Route::get('cart/cart-show', [CartController::class, 'index']);
Route::post('cart/cart-add/{id}', [CartController::class, 'add_cart'])->middleware('auth:sanctum');
Route::delete('cart/cart-remove/{id}', [CartController::class, 'destroy']);
Route::post('cart/cart-checkout', [CartController::class, 'checkout'])->middleware('auth:sanctum');

// PRODUCT FUNCTIONS //
Route::get('/products/products-show', [ProductsController::class, 'index']);
Route::get('/products/show-cpu', [ProductsController::class, 'index_cpu']);
Route::get('/products/show-gpu', [ProductsController::class, 'index_gpu']);
Route::get('/products/show-motherboard', [ProductsController::class, 'index_motherboard']);
Route::get('/products/show-ram', [ProductsController::class, 'index_ram']);
Route::get('/products/show-storage', [ProductsController::class, 'index_storage']);
Route::get('/products/show-psu', [ProductsController::class, 'index_psu']);
Route::get('/products/show-case', [ProductsController::class, 'index_case']);

Route::get('/products/products-search/{name}', [ProductsController::class, 'search_product']);
Route::get('/products/category-search/{category}', [ProductsController::class, 'search_category']);
Route::post('/products/products-create', [ProductsController::class, 'store']);
Route::delete('/products/products-delete', [ProductsController::class, 'destroy']);

// FOR ADMIN // TESTS //
Route::post('/test', [CartController::class, 'test']);
Route::apiResource('users', UserController::class);


//trial