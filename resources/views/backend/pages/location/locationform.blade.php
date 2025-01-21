@extends('backend.pages.master')


@section('content')



<div class="container">
    <h1 class="mb-4">Create New Location</h1>

    <form action="{{ route('locations.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Location Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter location name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter location description">{{ old('description') }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create Location</button>
        <a href="{{ route('locations.list') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>

  @endsection              