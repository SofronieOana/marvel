<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Movie;
use App\Review;
use Session;
use Form;


class ViewMoviesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function index()
    {
      
        $movies_theaters = MovieTheater::all();
        
        return view('index', compact('movies_theaters'));

    }

    public function showTheater($id)
    {
        $movie_theater = MovieTheater::findOrFail($id);
        $allMovies[$movie_theater->id] = $movie_theater->movies()->getResults();
        return view('showTheater', compact('movie_theater','allMovies'));
    }

    
}
 

 ?>