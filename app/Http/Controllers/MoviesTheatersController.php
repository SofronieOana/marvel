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
use App\MovieTheater;
use Illuminate\Support\Facades\URL;
use Session;
use Form;


class MoviesTheatersController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
     //dd(Session::all());
        $movies_theaters = MovieTheater::all();
        //dd($members);
        return view('movies_theaters.movies_theaters', compact('movies_theaters'));
    }

    public function create(){
        //dd(Session::all());
     return view('movies_theaters.create');
 }


 public function store(Request  $request){

    MovieTheater::create(request()->validate([
        'theater_name' => 'required',
        'theater_capacity' => 'required',
        'theater_hours' => 'required|date_format:H:i'
    ]));

    Session::flash('message','The item was added!');
    return redirect('movies_theaters');
}

public function edit($id){
    $movie_theater = MovieTheater::findOrFail($id);
            //dd($member);
    return view('movies_theaters.edit', compact('movie_theater'));
}

public function update(Request $request, $id)
{
        //dd($request);
   $movie_theater = MovieTheater::findOrFail($id);
        //dd($member);
   $request->validate([
    'theater_name' => 'required',
    'theater_capacity' => 'required',
    'theater_hours' => 'required|date_format:H:i'
]);

   $movie_theater->update($request->all());

   Session::flash('message','The item was updated!');
   return redirect('movies_theaters');
}


public function show($id){
    $movie_theater = MovieTheater::findOrFail($id);
    return view('movies_theaters.show', compact('movie_theater'));

}

public function destroy($id) {
  $movies_theaters = \App\MovieTheater::findOrFail($id);
  $movies_theaters->delete();
  Session::flash('message','The item was deleted!');
  return redirect('movies_theaters');
}




}


?>