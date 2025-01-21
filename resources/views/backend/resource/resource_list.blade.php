@extends('backend.pages.master')
@section('content')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Resource Distribution</h2>
        <a href="{{ route('resource.create') }}" class="btn btn-warning">Create New Resource Distribution</a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Distribution Date</th>
      <th scope="col">Resource Type </th>
      <th scope="col">Quantity</th>
      <th scope="col">Location</th>
      <th scope="col">Beneficiaries</th>
      <th scope="col">Distributed By</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($resource as $data)
    <tr>
      
      <td>{{$data->id}}</td>
      <td>{{$data->distribution_date}}</td>
      <td>{{$data->resource_type}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->location}}</td>
      <td>{{$data->beneficiaries}}</td>
      <td>{{$data->distributed_by}}</td>
      <td>{{$data->status}}</td>
      <td>

      <a href="{{ route('resource.edit', $data->id) }}"class="btn btn-success">Edit</a>
      <a href="{{ route('resource.delete', $data->id) }}" class="btn btn-danger">Delete</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection