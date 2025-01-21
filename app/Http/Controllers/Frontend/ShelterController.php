<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Shelter;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    public function shelter()
    {
        $list=Shelter::all();
        return view('frontend.pages.shelter_info',compact('list'));
    }
    public function viewdetails ($id)
    {
        $singleview=Shelter::find($id);
        return view('frontend.pages.shelter_details',compact('singleview'));
    }
}
