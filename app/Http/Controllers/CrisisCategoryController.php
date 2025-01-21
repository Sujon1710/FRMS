<?php

namespace App\Http\Controllers;

use App\Models\crisis_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CrisisCategoryController extends Controller
{

public function crisis_category(){
    $crisis = crisis_category::all();
    return view('backend.pages.crisis_category',compact('crisis'));
}
public function create_crisis_category(){
    return view('backend.pages.crisis.create_crisis_category');
}
  
public function crisis_category_store(Request $request)
{

  //  dd($request->all());
    $validation= Validator::make($request->all(),[
    'cat_name' => 'required|string|in:Flood,Earthquake,Cyclone,fire',
    'description' => 'required|string',
    'severity_level' => 'required|string|in:Low,Medium,High,Critical',
    'region_impacted' => 'nullable|string',
    'resource_needs' => 'nullable|string',
    ]);
    if($validation->fails()){

      notify()->error($validation->getMessageBag());
        return redirect()->back();
    }
// $filename='';
// if($request->hasFile('image'))
// {

//     $file=$request->file('image');

//     $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
//     // dd($request->all());



//     $file->storeAs('/backend/uploads',$filename);
// }

    crisis_category::create([
        'cat_name' => $request->cat_name,
        'description' => $request->description,
        'severity_level' => $request->severity_level,
        'region_impacted' => $request->region_impacted,
        'resource_needs' => $request->resource_needs,
       
    ]);
    notify()->success('added successfully');
   
    return redirect()->back();

    }
    
    public function delete($id)
    {
        crisis_category::find($id)->delete();

        notify()->success('crisis category deleted successfully');
        return redirect()->back();
    }    
}
