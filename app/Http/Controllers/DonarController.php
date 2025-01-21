<?php

namespace App\Http\Controllers;

use App\Models\Donar;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DonarController extends Controller
{
   public function donar(){
   $dot= Donar::paginate(3);
    return view ('backend.pages.donate.donar',compact('dot'));
   }
   public function donar_info(){

return view ('backend.pages.donate.donar_info');

   }
 


}
