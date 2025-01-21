@extends('backend.pages.master')


@section('content')


<a href="{{route('locations.create')}}" class="btn btn-warning">Create Location</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($list as $data)
    <tr>
   <td>{{$data->id}}</td>
   <td>{{$data->name}}</td>
   <td>{{$data->description}}</td>
 
   <td>
    <a href="{{route('locations.edit',$data->id)}}"class="btn btn-warning ">Edit</a>

    <a href="{{ route('locations.delete', $data->id) }}" class="btn btn-danger ">Delete</a>
   </td>


    </tr>
    @endforeach
  
  </tbody>
</table>

@endsection