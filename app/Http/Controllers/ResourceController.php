<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResourceController extends Controller
{
    public function list()
    {
        $resource=Resource::all();
        return view('backend.resource.resource_list',compact('resource'));
    }
    public function create()
    {
        return view('backend.resource.resource_form');
    }
    public function store(Request $request)
    {
        $validation=Validator::make($request->all(),[
    'distribution_date' => 'required|date',
    'resource_type' => 'required|string|in:Food,Water,Clothing,Medicine,Shelter Supplies,Other',
    'quantity' => 'required|integer|min:1',
    'location' => 'required|string|max:255',
    'beneficiaries' => 'required|integer|min:1',
    'distributed_by' => 'required|string|max:255',
    'status' => 'required|in:distributed,pending,in-progress',
        ]);
        if($validation->fails())
        {
            notify()->error('input field is empty');
            return redirect()->back();
        }
        Resource::create([
            'distribution_date'=>$request->distribution_date,
            'resource_type'=>$request->resource_type,
            'quantity'=>$request->quantity,
            'location'=>$request->location,
            'beneficiaries'=>$request->beneficiaries,
            'distributed_by'=>$request->distributed_by,
            'status'=>$request->status,
        ]);
        notify()->success('Resource Distribution Created Successfully');
        return redirect()->route('resource.list');
    }
    public function delete($id)
    {
        $resource=Resource::find($id);
        $resource->delete();
        notify()->success('Resource Distribution Deleted Successfully');
        return redirect()->back();
    }

    public function edit($id)
    {
        $resource=Resource::find($id);
        return view('backend.resource.resource_edit',compact('resource'));
    }
    public function update(Request $request,$id)
    {
        Resource::find($id)->update([
            'distribution_date'=>$request->distribution_date,
            'resource_type'=>$request->resource_type,
            'quantity'=>$request->quantity,
            'location'=>$request->location,
            'beneficiaries'=>$request->beneficiaries,
            'distributed_by'=>$request->distributed_by,
            'status'=>$request->status,
        ]);
        notify()->success('Resource Edited Successfuly');
        return redirect()->route('resource.list');
        

    }
}
