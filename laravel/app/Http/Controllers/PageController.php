<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    
    public function index(){
        return 'Homepage';
    }

    public function movies() {

        $movies = Movie::all();

        foreach($movies as $movie) {
            echo $movie->title;
        }
        
        return view('movies.index');
    }
}
