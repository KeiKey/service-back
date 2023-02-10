<?php

use App\Http\Controllers\Api\V1\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// V1 API Routes
Route::group(['prefix' => 'v1', 'middleware' => ['auth:api', 'api_request']], function () {
    Route::get('/user', function (Request $request) {return $request->user();});

    Route::apiResource('transactions', TransactionController::class, ['as' => 'api.v1']);
});
