<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use App\Member;
use Session;
use Form;
use Hash;
use Auth;
use App\Http\Controllers\admin\Memberscontroller;


class PagesController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function signup()
  {
    return view('signup');
  }

  public function store(Request $request)
  {
    Member::create(request()->validate([
      'name' => 'required|min:3|max:50',
      'email' => 'required|unique:members,email|email',
      'password' => 'required|min:10',
      'confirm_password' => 'required|same:password',
      'age'=> 'required',
      'usertype'=>'required'
    ]));

    Session::put(['type'=> $request->type, 'age'=>$request->age]);
    return redirect('/');
  }

  public function login(Request $request)
  {
      //dd($request);

    $email=$request->input('email');
    $password=$request->input('password');
          //dd($request);
    

    $checklogin = Member::where(['email'=>$email,'password'=>$password])->get()->first();
      //dd($checklogin);
    if($checklogin)
    {
        //dd($member);
     Session::put(['usertype'=> $checklogin->usertype, 'age' => $checklogin->age]);
   }
   else
   {
     echo "----Login failed";
   }

   switch ($checklogin->usertype) {
        case 'Admin':
                return redirect('/members');
            break;
        case 'Visitor':
                return redirect('/');
            break; 
        case 'Registered':
                return redirect('/');
            break;
    }

}

public function showLogin()
{
  return View::make('login');
}

function about(){
 return view('about');
}


public function contact(){
 return view('contact');
}

public function theater(){
 return view('theater');
}

public function logout(Request $request)
{
  
  Session::flush('you are logout');
  
  return redirect('/login');

  //$request->session()->flush();
}
}
