<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Crisis;
use Illuminate\Http\Request;

class CrisisController extends Controller
{
    public function crisis()
    {
        $crises=Crisis::all();
        return view('frontend.pages.crisis.ongoingcrisis',compact('crises'));
    }
    public function crisisview($id)
    {
        $singleview=Crisis::find($id);
        return view('frontend.pages.crisis.crisisview',compact('singleview'));
    }
}
