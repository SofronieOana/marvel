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
use App\Review;
use Session;
use Form;


class ReviewsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create(){
     return view('reviews.create');
 }

 public function store(Request  $request){
   Review::create(request()->validate([
    'rating' => 'required|numeric',
    'title' => 'required',
    'description'=>'required'
]));

   Session::flash('message','The item was added!');
   return redirect('reviews');
}

public function edit($user_id){
    $review = \App\Review::findOrFail($user_id);

    return view('reviews.edit', ['review' => $review]);
}

public function update(Request $reques, $user_id)
{
   $review = \App\Review::findOrFail($user_id);
   $review->rating = request ('rating');
   $review->description = request ('description');
   $review->title = request ('title');
   $review->save();
   return redirect('/reviews');
        // dd($user_id,request('first_name'));
}


public function show($user_id){
        //dd($user_id);
  $review =Review::findOrFail($user_id);
          //dd($review);
  return view('reviews.show', ['review' => $review]);

}

public function index(){
    $reviews = Review::all();
        //dd($reviews);
    return view('reviews.reviews', compact('reviews'));


}


public function destroy($user_id) {
  $reviews = \App\Review::findOrFail($user_id);
  $reviews->delete();
  Session::flash('message','The item was deleted!');
  return redirect('reviews');
}




}


?>