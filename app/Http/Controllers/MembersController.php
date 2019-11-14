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
use App\Member;
use Session;
use Form;


class MembersController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function index(){
    // dd(\Session::all());
    $members = Member::all();
        //dd($members);
    return view('members.members', ['members'=>$members]);
  }

  public function create(){
   return view('members.create');
 }


 public function store(Request  $request){

  Member::create(request()->validate([
    'name' => 'required|min:3|max:50',
    'email' => 'required|unique:members,email|email',
    'password' => 'required|min:10',
    'confirm_password' => 'required|same:password',
    'age'=> 'required',
    'usertype'=>'required'
  ]));

  Session::flash('message','The item was added!');
  return redirect('members');
}

public function edit($id){
  $member = Member::findOrFail($id);
            //dd($member);
  return view('members.edit', compact('member'));
}

public function update(Request $request, $id)
{
    
 $member = Member::findOrFail($id);
        //dd($member);
 $request->validate([
  'name' => 'required|min:5|max:50',
  'age' => 'required',
  'email' => 'required|unique:members,email,'.$member->id.'|email|max:30',
  'password' => 'min:10|required_with:confirm_password|same:confirm_password',
  'confirm_password' => 'min:10',
  'usertype' => 'required'
]);
 // dd($errors);
 $member->update($request->all());

 Session::flash('message','The item was updated!');
 return redirect('members');
}


public function show($id){
  $member = Member::findOrFail($id);
  return view('members.show', ['member' => $member]);

}

public function destroy(Member $member) {
            //dd($member);
  $member->delete();
  
  Session::flash('message','The item was deleted!');
  return redirect('members');
  
}




}


?>