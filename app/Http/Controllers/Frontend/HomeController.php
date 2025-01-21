<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Create;
use App\Models\Crisis;
use App\Models\crisis_category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function home(){
   $crises=Crisis::orderBy('id','desc')->limit(3)->get();
   $list=Create::orderBy('id','desc')->limit(4)->get();
    return view('frontend.pages.home',compact('list','crises'));
 }
}
