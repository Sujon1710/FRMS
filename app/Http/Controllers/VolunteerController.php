<?php

namespace App\Http\Controllers;

use App\Models\Create;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
   public function volunteer(){
   $volunteer=Create::paginate(5);
    return view('backend.pages.volunteers.volunteer',compact('volunteer'));
   }
 
}
