@extends('backend.pages.master')

@section('content')



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <a href="{{route('crisis.form')}}"  class="btn btn-warning">Create Crisis</a>

    <title> Crises</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2> Crises</h2>
    
    <!-- Table to display the crises data -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Location</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Category</th>
                <th>Severity Level</th>
                <th>Affected People</th>
                <th>Raise Amount</th>
                <th>Budget</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($crises as $crisis)
                <tr>
                    <td>{{ $crisis->id }}</td>
                    <td>{{ $crisis->name }}</td>
                    <td>{{ $crisis->description }}</td>
                    <td>{{ $crisis->location }}</td>
                    <td>{{ $crisis->start_date }}</td>
                    <td>{{ $crisis->end_date }}</td>
                    <td>{{ $crisis->category }}</td>
                    <td>{{ $crisis->severity_level }}</td>
                    <td>{{ $crisis->affected_people }}</td>
                    <td>{{ $crisis->raise_amount }}</td>
                    <td>{{ $crisis->budget }}</td>
                    <td>
                    <img src="{{ url('/backend/uploads/' . $crisis->image) }}" alt="image"  width="100px">

                    </td>

                    <td>
                        <!-- Example of action buttons (e.g., Edit, Delete) -->

                        <a href="#" class="btn btn-sm btn-primary">Add</a>
                        <a href="#" class="btn btn-sm btn-success">Edit</a>
                        <a href="{{route('crisis.delete',$crisis->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
{{$crises->links()}}
@endsection