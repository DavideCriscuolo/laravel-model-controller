<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view("index", compact("movies"));
    }


    public function SingleMovie($id)
    {
        $movie = Movie::find($id);  //funzione con il find per torvare il singolo film tramite id
        return view("SingleMovie", compact("movie"));
    }
}
