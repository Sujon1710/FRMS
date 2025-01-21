@extends('backend.pages.master')
@section('content')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Shelters List</h2>
        <a href="{{ route('shelter.create') }}" class="btn btn-warning">Create New Shelter</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Capacity</th>
                    <th scope="col">Location</th>
                    <th scope="col">Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">Contact Person</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Opening Date</th>
                    <th scope="col">Closing Date</th>
                    <th scope="col">Emergency Needs</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->capacity }}</td>
                        <td>{{ $data->location }}</td>
                        <td>{{ $data->type }}</td>
                        <td>{{$data->status}}</td>
                        <td>{{ $data->contact_person }}</td>
                        <td>{{ $data->phone_number }}</td>
                        <td>{{ $data->opening_date}}</td>
                        <td>{{$data->closing_date }}</td>
                        <td>{{ $data->emergency_needs }}</td>
                        <td>
                    <img src="{{ url('/backend/uploads/'. $data->image) }}" alt="image"  width="100px">

                    </td>
                        <td>
                           
                            <a href="{{ route('shelter.edit', $data->id) }}" class="btn btn-primary btn-success">Edit</a>
                            <a href="{{ route('shelter.delete', $data->id) }}"  class="btn btn-info btn-danger">Dlete</a>
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
