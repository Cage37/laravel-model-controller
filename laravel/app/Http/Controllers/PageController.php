<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    
    public function index(){
        return view('homepage.home');
    }

    public function movies() {

        $movies = Movie::all();
        
        return view('movies.index', compact('movies'));
    }
}
