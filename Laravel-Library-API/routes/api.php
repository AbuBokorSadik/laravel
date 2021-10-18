<?php

use App\Http\Controllers\API\V1\Auth\Login\LoginController;
use App\Http\Controllers\API\V1\Book\BookController;
use App\Http\Controllers\API\V1\User\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix' => 'v1', 'namespace' => 'API\\V1\\Book', 'middleware' => ['auth:api']], function(){
    Route::get('books', [BookController::class, 'index']);
    Route::post('books', [BookController::class, 'create']);
    Route::put('books/{id}', [BookController::class, 'update']);
    Route::delete('books/{id}', [BookController::class, 'delete']);

});

Route::group(['prefix' => 'v1/user', 'namespace' => 'API\\V1\\Auth'], function(){
    Route::post('/login', [LoginController::class, 'login']);
    Route::middleware('auth:api')->get('/info', [UserController::class, 'index']);

});