<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
   public function login(){
    return view('backend.pages.admin.adminLogin');
   }
   public function do_login(Request $request){
   // dd($request->all());
   $credential=$request->except('_token');
   $check = (Auth::attempt($credential));

   if($check)
   {
      notify()->success('login successfully');
      return redirect()->route('home');
   }else
   {
      // notify()->error('login fail');
      //  dd("login fail");
       
      return redirect()->back();
   }
  
   }
   public function sign_out(){
      
      Auth::logout();
     
      return redirect()->route('login');
      notify()->success('login out');
}
   // dd($credentials);
   }
   