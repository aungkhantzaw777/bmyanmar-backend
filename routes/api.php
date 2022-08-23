<?php

use App\Http\Controllers\IncomeController;
use App\Http\Controllers\{WishListController, ManageIncomeController};
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/incomes', [IncomeController::class, 'index']);
Route::post('/incomes/create', [IncomeController::class, 'store']);
Route::post('/incomes/delete', [IncomeController::class, 'delete']);
Route::post('/incomes/update', [IncomeController::class, 'update']);

// wishlist
Route::get('/wishlist', [WishListController::class, 'index']);
Route::get('/wishlist/show/{id}', [WishListController::class, 'show']);
Route::post('/wishlist/create', [WishListController::class, 'store']);
Route::delete('/wishlist/delete/{id}', [WishListController::class, 'destroy']);
Route::patch('/wishlist/update/{id}', [WishListController::class, 'update']);

// manageIncome
Route::post('/manageIncome', [ManageIncomeController::class, 'store']);
Route::get('/manageIncome', [ManageIncomeController::class, 'index']);