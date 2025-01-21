<?php

namespace App\Http\Controllers;
use \App\Models\Crisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrisisController extends Controller
{
  public function crisislist()
  {
    $crises=Crisis::paginate(5);
    return view('backend.pages.crisis.crisislist',compact('crises'));
  }


  public function crisisform()
  {
return view('backend.pages.crisis.crisis');
  }

  
  public function store(Request $request)
  {
//    dd($request->all());
    $validation=Validator::make($request->all(),[

            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'category' => 'required|in:Flood,Earthquake,Fire,Storm,Other',
            'severity_level' => 'required|integer|min:1|max:5',
            'affected_people' => 'required|integer|min:1',
           'raise_amount' => 'required|min:0', 
          'budget' => 'required|min:0', 
          'image' => 'nullable'
    ]);

    if($validation->fails())
    {
    notify()->error('input fill is empty');
    return redirect()->back();
    }
    $filename = '';
    
    if ($request->hasFile('image')) {
      
      $file = $request->file('image');
      $filename = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
      $file->storeAs('/backend/uploads', $filename);
    }
    
    Crisis::create([
    'name' => $request->name,
    'description' => $request->description,
    'location' => $request->location,
    'start_date' => $request->start_date,
    'end_date' => $request->end_date,
    'category' => $request->category,
    'severity_level' => $request->severity_level,
    'affected_people' => $request->affected_people,
    'raise_amount' => $request->raise_amount,
    'budget' => $request->budget,
   'image' => $filename
    ]);
    notify()->success('form fillup successfully');
    return redirect()->back();
  }
  public function delete($id)
  {
    Crisis::find($id)->delete();

    notify()->success('crisis deleted successfully');
    return redirect()->back();
  }
}
