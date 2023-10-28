<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationController;

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

Route::get('phone-list', [RelationController::class, 'getPhoneUserList']);
Route::get('user-list', [RelationController::class, 'getUserIdWiseUser']);
Route::post('phone-store', [RelationController::class, 'phone-store']);
Route::post('user-store', [RelationController::class, 'userStore']);
