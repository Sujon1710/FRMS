<?php

namespace App\Http\Controllers;

use App\Models\Medical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MedicalController extends Controller
{
  public function list()
  {
    $list=Medical::all();
    return view('backend.pages.medical.medical_assistance_list',compact('list'));
  }
  public function create()
  {
    return view('backend.pages.medical.medical_assistance_form');
  }
  public function store(Request $request)
  {
    // dd($request->all());
    $validation=Validator::make($request->all(),[

        'shelter_name' => 'required', 
        'supplies' => 'required|string', 
        'personnel' => 'required|string',  
        'status' => 'required|in:active,completed',  
        'health_conditions' => 'nullable|string',  
        'response_team' => 'required|string|max:255',  
        'facilities' => 'nullable|array',  
        'facilities.*' => 'nullable|string',  
        'last_assistance_date' => 'required|date',  
        'people_served' => 'required|integer|min:1'
    ]);
    if($validation->fails())
    {
      // dd($validation->getMessageBag());
      notify()->error('input field is empty');
      return redirect()->back();
    }
    Medical::create([
      'shelter_name'=>$request->shelter_name,
      'supplies'=>$request->supplies,
      'personnel'=>$request->personnel,
      'status'=>$request->status,
      'health_conditions'=>$request->health_conditions,
      'response_team'=>$request->response_team ,
      'facilities'=>json_encode($request->facilities),
      'last_assistance_date'=>$request->last_assistance_date,
      'people_served'=>$request->people_served 

    ]);
    notify()->success('form fill up successfully');
    return redirect()->route('assistance.list');
  }
  public function delete($id)
  {
    $list=Medical::find($id);
    $list->delete();
    notify()->success('Medical Assistance Deleted Successfully');
    return redirect()->back();
  }
  public function edit($id)
  {
    $list=Medical::find($id);
    return view('backend.pages.medical.medical_assistance_edit',compact('list'));
  }
  public function update(Request $request,$id)
  {
  Medical::find($id)->update([
    'shelter_name'=>$request->shelter_name,
      'supplies'=>$request->supplies,
      'personnel'=>$request->personnel,
      'status'=>$request->status,
      'health_conditions'=>$request->health_conditions,
      'response_team'=>$request->response_team ,
      'facilities'=>json_encode($request->facilities),
      'last_assistance_date'=>$request->last_assistance_date,
      'people_served'=>$request->people_served 

  ]);
  notify()->success('Medical Assistance Edit Successfully');
  return redirect()->back();

  }
}
