<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
{
  public function list()

  {
    $list=Location::all();
    return view('backend.pages.location.locationlist',compact('list'));
  }

  public function create()
  {
    return   view('backend.pages.location.locationform');
  }

  public function store(Request $request)
  {
// dd($request->all());
$validation=Validator::make($request->all(),[
  'name' => 'required|string|max:255',
   'description' => 'required|string|max:255',
]);

if($validation->fails())
{
  notify()->error('input field is empty');
  return redirect()->back();
}
Location::create([
  'name' => $request->name,
  'description' => $request->description,
  
]);
notify()->success('location create succesfully');
return redirect()->back();

  }
  public function delete($id)
  {
    $list=Location::find($id);
    $list->delete();

    notify()->success('location delete successfully');
    return redirect()->back();
  }
  public function edit($id)
  {
    $list=Location::find($id);
    return view('backend.pages.location.location_edit',compact('list'));
  }


  public function update(Request $request,$id)
  {
$list=Location::find($id);
$list->update([
  'name'=>$request->name,
  'description'=>$request->description,
]);
notify()->success('location update successfully');
return redirect()->route('locations.list');

  }
}
