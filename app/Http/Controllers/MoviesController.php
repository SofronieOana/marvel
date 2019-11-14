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
use Session;
use Form;


class MoviesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create(){
     return view('movies.create');
 }

 public function store(Request  $request){
    Movie::create(request()->validate ([
        'theater_id'=>'required',
        'movie_title' => 'required|max:50',
        'trailer' => 'required|min:5|max:255',
        'release_date' => 'required',
        'running_time' => 'required',
        'film_genre' => 'required',
        'cast' => 'required',
        'director' => 'required',
        'production_year' => 'required',         
        'original_language' => 'required',
        'age_restriction' => 'required',
        'price' => 'required'
    ]));

    
    Session::flash('message','The item was added!');
    return redirect('movies');
}


public function edit($id){
    $movie = \App\Movie::findOrFail($id);

    return view('movies.edit', compact('movie'));
}

public function update(Request $request, $id)
{
        //dd($request);
   $movie = \App\Movie::findOrFail($id);
         //dd($movie);
   $request->validate([
    'movie_title' => 'required|min:3|max:50',
    'release_date' => 'required',
    'running_time' => 'required',
    'film_genre' => 'required',
    'cast' => 'required',
    'director' => 'required',
    'production_year' => 'required',         
    'age_restricion' => 'required',
    'original_language' => 'required',
    'trailer' => 'required',
    'price' => 'required'
]);
         //dd($request);
   $movie->update($request->all()); 
        //dd($movie); 
   Session::flash('message','The item was updated!');
   return redirect('/movies');
   $movie->movie_title = request ('movie_title');
   $movie->release_date = request ('release_date');
   $movie->running_time = request ('running_time');
   $movie->film_genre = request ('film_genre');
   $movie->cast = request ('cast');
   $movie->director = request ('director');
   $movie->production_year = request ('production_year');
   $movie->original_language = request ('original_language');
   $movie->age_restriction = request ('age_restriction');
   $movie->price = request ('price');
   
   $movie->save();
   Session::flash('message','The item was updated!');
   return redirect('movies');
}


public function show($id){
  
   return view('movies.show', ['movie' => \App\Movie::findOrFail($id)]);

}
public function index(){
    // dd(\Session::all());
    $movies =\App\Movie::all();

    return \View::make('movies/movies', ['movies'=>$movies]);
}


public function destroy($id) {
  $movies = \App\Movie::findOrFail($id);
  $movies->delete();
  Session::flash('message','The item was deleted!');
  return redirect('movies');
}




}


?>