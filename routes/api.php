<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('movies/filter/review', [MovieController::class, 'filterByReview'])->name('movies.filter.review');

Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('reviews/{movie}', [ReviewController::class, 'show'])->name('reviews.show');
Route::post('reviews/{movie}/rating', [ReviewController::class, 'storeRating'])->name('review.store.rating');
Route::post('reviews/{movie}/description', [ReviewController::class, 'storeDescription'])->name('review.store.description');
Route::delete('reviews/{movie}', [ReviewController::class, 'destroy'])->name('review.destroy');
