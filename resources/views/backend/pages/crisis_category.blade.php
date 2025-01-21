@extends('backend.pages.master')
@section('content')


<a href="{{route('create.category')}}" class="btn btn-warning">Create Crisis Category</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Severity Level</th>
      <th scope="col">Region Impacted</th>
      <th scope="col">Resource Needs</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($crisis as $data)
    <tr>
   <td>{{$data->id}}</td>
   <td>{{$data->cat_name}}</td>
   <td>{{$data->description}}</td>
   <td>{{$data->severity_level}}</td>
   <td>{{$data->region_impacted}}</td>
   <td>{{$data->resource_needs}}</td>
   
   <td>
    <a href=""class="btn btn-warning ">Add</a>
    <a href=""class="btn btn-primary ">Edit</a>
    <a href="{{route('crisis.category.delete',$data->id)}}"class="btn btn-primary ">Delete</a>
   </td>


    </tr>
    @endforeach
  </tbody>
</table>

@endsection