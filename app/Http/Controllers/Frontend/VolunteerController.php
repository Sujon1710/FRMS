<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Create;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\volunteerGuard;


class VolunteerController extends Controller
{
  public function create()
  {
    return view('frontend.pages.volunteer.volunteerform');
  }

  public function details()
  {
    $list = Create::all();
    return view('frontend.pages.volunteer.volunteerdetails', compact('list'));
  }


  public function createstore(Request $request)
  {
    // dd($request->all());
    $validation = Validator::make($request->all(), [

      'name' => 'required|string|max:255',
      'email' => 'required|email',
      'password'=>'required|string|min:6|confirmed',
      'number'=>'required',
      'address' =>'required|string',
      'availability' => 'required|string',
      'image' => 'required'

    ]);

    if ($validation->fails()) {
      dd($validation->getMessageBag());
      notify()->error('input field is empty');
      return redirect()->back();
    }

    $filename = '';
    
    if ($request->hasFile('image')) {
      
      $file = $request->file('image');
      $filename = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
      $file->storeAs('/frontend/uploads', $filename);
    }
    
    Create::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt ($request->password),
      'number' => $request->number,
      'address' => $request->address,
      'availability' => $request->availability,
      'image' => $filename
    ]);
    notify()->success('form successfully fillup');
    return redirect()->route('frontend.home');
  }




  public function login(Request $request)
  {
    //dd($request->all());
    $validation=Validator::make($request->all(),[
      'email'=>'required|email',
      'password'=>'required|min:6'

    ]);
    if($validation->fails())
    {
      notify()->error($validation->getMessageBag());
      return redirect()->back();
    }

    $credentials=$request->except('_token');

    // dd($credentials);
    $check=auth('volunteerGuard')->attempt($credentials);

    if($check)
    {
      notify()->success('login successfully');
      return redirect()->route('frontend.home');
    }
    else
    {
      notify()->error('login faild');
      return redirect()->route('frontend.home');
    }
  }
  public function log_out()
  {
    auth('volunteerGuard')->logout();
    return redirect()->route('frontend.home');
  }

  public function viewdetails($id)
  {
    $singleview = Create::find($id);
    return view('frontend.pages.volunteer.details', compact('singleview'));
  }
}
