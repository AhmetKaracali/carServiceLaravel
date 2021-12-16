<?php
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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ServicesController;

Route::post('login', [ApiController::class, 'authenticate']);
Route::post('register', [ApiController::class, 'register']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', [ApiController::class, 'logout']);
    Route::get('get_customer', [ApiController::class, 'get_customer']);
    Route::get('services', [ServicesController::class, 'index']);
    Route::get('services/{id}', [ServicesController::class, 'show']);
    Route::get('orders', [OrdersController::class, 'index']);
    Route::get('orders/id', [OrdersController::class, 'show']);
    Route::post('placeorder', [OrdersController::class, 'store']);
});
