<?php

use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\IngredientController;
use App\Http\Controllers\Api\V1\MealController;
use App\Http\Controllers\Api\V1\MealTranslationController;
use App\Http\Controllers\Api\V1\TagController;
use App\Models\Category;
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

/* Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function()
{
    Route::apiResource('meals',MealController::class);
    Route::apiResource('mealstranslation',MealTranslationController::class);
    Route::apiResource('categories',CategoryController::class);
    Route::apiResource('tags',TagController::class);
    Route::apiResource('ingredients',IngredientController::class);
}); */

Route::get('meals','App\Http\Controllers\Api\V1\MealController@index');
Route::get('tags','App\Http\Controllers\Api\V1\TagController@index');
Route::get('taggs','App\Http\Controllers\Api\V1\TagTranslationController@index');