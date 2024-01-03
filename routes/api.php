<?php
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CartController;

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
Route::post('/searchProduct', [ProductController::class,'search']);
Route::get('/getProduct', [ProductController::class,'index']);
Route::get('/showProduct/{id}', [ProductController::class, 'show']);
Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/cart', [CartController::class, 'store' ]);
Route::get('/getCart', [CartController::class, 'index' ]);
Route::delete('/removeCart/{id}', [CartController::class, 'destroy' ]);
Route::get('/user', [AuthenticationController::class, 'getUser'])->middleware('auth:sanctum');
Route::get('/logout', [AuthenticationController::class, 'logout'])->middleware('auth:sanctum');
