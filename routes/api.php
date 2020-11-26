<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get("getStudent", [APIController::class, 'getStudent']);
    Route::post("addStudent", [APIController::class, 'addStudent']);
    Route::patch("editStudent/{student_id}", [APIController::class, 'editStudent']);
    Route::delete("deleteStudent/{student_id}", [APIController::class, 'deleteStudent']);
    Route::get("searchStudent/{username}", [APIController::class, 'searchStudent']);
});
Route::post("login", [APIController::class, 'loginUSer']);