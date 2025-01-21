@extends('backend.pages.master')

@section('content')

<h1>Volunteers</h1>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">MOBILE</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">Image</th>
      <th scope="col">availability</th>

      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($volunteer as $data)
    <tr>
      <!-- <th scope="row">1</th> -->
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->password}}</td>
      <td>{{$data->number}}</td>
      <td>{{$data->address}}</td>
      <td>
    

    <img src="{{ url('/frontend/uploads/' . $data->image) }}" alt="image" width="100px">
  

      </td>
      <td>{{$data->availability}}</td>
      <td>
        <a class="btn btn-warning" href="">Edit</a>
      <a class="btn btn-danger" href="">Delete</a>
    </td>
    </tr>
    @endforeach


  </tbody>
</table>
{{$volunteer->links()}}
@endsection