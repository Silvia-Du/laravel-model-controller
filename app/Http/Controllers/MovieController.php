<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{


    public function index(){

        $movies = Movie::all();
        $best_movies = Movie::where('vote', '>', 9)->get();
        return view('movies', compact('movies', 'best_movies' ));
    }
}
