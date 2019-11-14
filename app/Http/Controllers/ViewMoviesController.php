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
    
    $movies = Movie::all();
    
    return view('index', compact('movies'));

  }

  public function showMovie($id)
  {
    $movie = Movie::findOrFail($id);
    $allReviews[$movie->id] = $movie->reviews()->getResults();
    return view('showMovie', compact('movie','allReviews'));
  }

  public function review(){
   return view('review.create');
 }

 public function store(Request  $request, $id){
  Review::create(request()->validate([
    'rating' => 'required|numeric',
    'title' => 'required',
    'description'=>'required'
  ]));

  Session::flash('message','The item was added!');
  return redirect('/showMovie/');
  
}

}


?>