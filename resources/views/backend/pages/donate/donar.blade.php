@extends('backend.pages.master')


@section('content')

<h2>Donor Information</h2>
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Address</th>
          <th scope="col">Amount</th>
          <th scope="col">Crisis Id</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($dot as $data)
        <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->mobile}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->amount}}</td>
        <td>{{$data->crisis_id}}</td>
        <td>
          <a class="btn btn-warning" href="">Edit</a>
          <a class="btn btn-danger" href="">Delete</a>
      </td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
{{$dot->links()}}
@endsection