<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
})->name('auth:me');

Route::prefix('products')->as('products:')->group(function () {
    /*
     * Show all products
     */

    Route::get('/', App\Http\Controllers\Api\V1\Products\IndexController::class)->name('show');
});
