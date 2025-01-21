@extends('backend.pages.master')

@section('content')
<div class="container">
    <div style="z-index: -1;" class="p-5 mt-5 shadow-lg">
        <h2 class="pb-3 fs-1">Add New Crisis Category</h2>
        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="category_name">Select Category Name</label>
                <select name="cat_name" id="category_name" class="form-control" required>
                    <option value="" disabled selected>Select a category</option>
                    <option value="Flood">Flood</option>
                    <option value="Earthquake">Earthquake</option>
                    <option value="Cyclone">Cyclone</option>
                
                    <option value="Wildfire">fire</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="description">Enter Description</label>
                <input name="description" type="text" class="form-control" id="description" placeholder="Description" required>
            </div>
            
            <div class="form-group">
                <label for="severity_level">Select Severity Level</label>
                <select name="severity_level" id="severity_level" class="form-control" required>
                    <option value="" disabled selected>Select Severity Level</option>
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                    <option value="Critical">Critical</option>
                </select>
            </div>

            <div class="form-group">
                <label for="region_impacted">Region Impacted</label>
                <input name="region_impacted" type="text" class="form-control" id="region_impacted" placeholder="Enter regions impacted">
            </div>

            <div class="form-group">
                <label for="resource_needs">Expected Resource Needs</label>
                <input name="resource_needs" type="text" class="form-control" id="resource_needs" placeholder="Enter resource needs">
            </div>

            <button type="submit" class="btn btn-primary active">Submit</button>
            <a href="{{ route('locations.list') }}" class="btn btn-secondary">Back to List</a>

        </form>
    </div>
</div>
@endsection
