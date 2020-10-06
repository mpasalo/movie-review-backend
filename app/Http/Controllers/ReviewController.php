<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function show(Movie $movie)
    {
        $movie = $movie->load('review');

        if ($movie->hasReview()) {
            return Review::find($movie->review->id);
        } else {
            return '';
        }
    }
    
    public function storeDescription(Movie $movie, Request $request)
    {
        return Review::updateOrcreate([
            'movie_id' => $movie->id,
        ], [
            'description' => $request['description']
        ]);
    }

    public function storeRating(Movie $movie, Request $request)
    {
        return Review::updateOrcreate([
            'movie_id' => $movie->id,
        ], [
            'rating' => $request['rating']
        ]);
    }

    public function destroy(Movie $movie)
    {
        $review = Review::find($movie->review->id);
        return $review->delete();
    }
}
