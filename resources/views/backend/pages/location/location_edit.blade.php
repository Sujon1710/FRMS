@extends('backend.pages.master')


@section('content')


<div class="container">
    <h2>Edit Location</h2>
    <form action="{{ route('locations.update', $list->id) }}" method="POST">
        @csrf
    
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $list->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $list->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

@endsection