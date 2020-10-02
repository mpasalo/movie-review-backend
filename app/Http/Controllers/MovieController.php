<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::all();
    }

    public function filterByReview()
    {
        $movies = Movie::all();

        $filteredMovies = $movies->filter(function ($value, $key) {
            return $value->hasReview();
        })->values();

   

        return $filteredMovies;
    }
}
