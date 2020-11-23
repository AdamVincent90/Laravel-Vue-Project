<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BookController;
use \App\Http\Controllers\BookAvailabilityController;
use App\Http\Controllers\ReviewController;

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

Route::resource('/books', BookController::class);
Route::get('/books/{book}/availability', BookAvailabilityController::class)->name('book.availability.show');
Route::get('/books/{book}/reviews', ReviewController::class)->name('book.reviews.index');