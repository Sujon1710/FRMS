@extends('backend.pages.master')
@section('content')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Medical Assistance</h2>
        <a href="{{ route('assistance.create') }}" class="btn btn-warning">Create New Medical Assistance</a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Shelter Name</th>
      <th scope="col">Supplies</th>
      <th scope="col">Personal</th>
      <th scope="col">Health Conditions</th>
      <th scope="col">Response Team</th>
      <th scope="col">Facilities</th>
      <th scope="col">Last Assistance Data</th>
      <th scope="col">People Served</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($list as $data)
    <tr>
      
      <td>{{$data->id}}</td>
      <td>{{$data->shelter_name}}</td>
      <td>{{$data->supplies}}</td>
      <td>{{$data->personnel}}</td>
      <td>{{$data->health_conditions}}</td>
      <td>{{$data->response_team}}</td>
      <td>{{$data->facilities}}</td>
      <td>{{$data->last_assistance_date}}</td>
      <td>{{$data->people_served}}</td>
      <td>
        <a href="{{route('assistance.edit',$data->id)}}" class="btn btn-success">Edit</a>
        <a href="{{route('assistance.delete',$data->id)}}" class="btn btn-danger">Delete</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
    
    @endsection