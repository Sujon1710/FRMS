<?php

namespace App\Http\Controllers;

use App\Models\Shelter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShelterController extends Controller
{
    public function list()
    {
        $list=Shelter::all();
        return view('backend.pages.shelter.shelter_list',compact('list'));
    }
    public function create()
    {
        return view('backend.pages.shelter.shelter_form');
    }
    public function store(Request $request)
   {
    // dd($request->all());
    $validation=Validator::make($request->all(),[
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'capacity' => 'required|integer|min:1',
        'location' => 'required|string|max:255',
        'type' =>'required|in:Temporary,Permanent',
        'status'=> 'required|in:open,closed',
        'beds'=>'nullable|integer|min:1',
        'contact_person'=>'nullable|string|max:255',
        'phone_number'=>'nullable|min:10|max:15',
        'email'=>'nullable|email|max:255',
        'opening_date'=>'required|date',
        'closing_date'=>'required|date|after_or_equal:opening_date',
       'image' =>'nullable'
    ]);

    if($validation->fails())
    {
    notify()->error('input fill is empty');
    return redirect()->back();
    }

    $filename = '';
    
    if ($request->hasFile('image')) {
      
      $file = $request->file('image');
      $filename = date('Ymdhis') . '.'. $file->getClientOriginalExtension();
      $file->storeAs('/backend/uploads', $filename);
    }
    

Shelter::create([
'name'=>$request->name,
 'description'=> $request->description,
'capacity'=> $request->capacity,
'location'=>$request->location,
'type'=>$request->type,
'status'=>$request->status,
'beds'=>$request->beds ,
'contact_person'=> $request->contact_person,
'phone_number'=>$request->phone_number,
'opening_date'=> $request->opening_date,
'closing_date' => $request->closing_date,
'emergency_needs'=> $request->emergency_needs,
'image' =>$filename

]);
notify()->success('Shelter created succesfully');
return redirect()->back();
   }
   public function delete($id)
   {
    $shelter=Shelter::find($id);
    $shelter->delete();
    notify()->success('Shelter Deleted Successfully');
    return redirect()->back();
   }
   public function edit($id)
   {
    $shelter=Shelter::find($id);
    return view('backend.pages.shelter.shelter_edit',compact('shelter'));
    
   }
   public function update(Request $request,$id)
   {
    Shelter::find($id)->update([
        'name'=>$request->name,
        'description'=> $request->description,
        'capacity'=> $request->capacity,
        'location'=>$request->location,
        'type'=>$request->type,
        'status'=>$request->status,
        'beds'=>$request->beds ,
        'contact_person'=> $request->contact_person,
        'phone_number'=>$request->phone_number,
        'opening_date'=> $request->opening_date,
        'closing_date' => $request->closing_date,
        'emergency_needs'=> $request->emergency_needs,
    ]);
    notify()->success('Shelter Updated Successfully');
    return redirect()->back();
   }
   
}
