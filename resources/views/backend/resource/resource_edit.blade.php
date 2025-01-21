@extends('backend.pages.master')
@section('content')

<div class="container mt-4">
<div class=" text-align-center mb-3" style="font-size: 20px;">
        <h2>Edit Resource Distribution</h2>
    </div>


    <!-- Resource Distribution Edit Form -->
    <form action="{{ route('resource.update', $resource->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Distribution Date -->
        <div class="form-group">
            <label for="distribution_date">Distribution Date</label>
            <input type="date" class="form-control" id="distribution_date" name="distribution_date" value="{{ old('distribution_date', $resource->distribution_date) }}" required>
        </div>

        <!-- Resource Type -->
        <div class="form-group">
            <label for="resource_type">Resource Type</label>
            <select class="form-control" id="resource_type" name="resource_type" required>
                <option value="Food" {{ old('resource_type', $resource->resource_type) == 'Food' ? 'selected' : '' }}>Food</option>
                <option value="Water" {{ old('resource_type', $resource->resource_type) == 'Water' ? 'selected' : '' }}>Water</option>
                <option value="Clothing" {{ old('resource_type', $resource->resource_type) == 'Clothing' ? 'selected' : '' }}>Clothing</option>
                <option value="Medicine" {{ old('resource_type', $resource->resource_type) == 'Medicine' ? 'selected' : '' }}>Medicine</option>
                <option value="Shelter Supplies" {{ old('resource_type', $resource->resource_type) == 'Shelter Supplies' ? 'selected' : '' }}>Shelter Supplies</option>
                <option value="Other" {{ old('resource_type', $resource->resource_type) == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>

        <!-- Quantity -->
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $resource->quantity) }}" required>
        </div>

        <!-- Location -->
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $resource->location) }}" required>
        </div>

        <!-- Beneficiaries -->
        <div class="form-group">
            <label for="beneficiaries">Number of Beneficiaries</label>
            <input type="number" class="form-control" id="beneficiaries" name="beneficiaries" value="{{ old('beneficiaries', $resource->beneficiaries) }}" required>
        </div>

        <!-- Distributed By -->
        <div class="form-group">
            <label for="distributed_by">Distributed By</label>
            <input type="text" class="form-control" id="distributed_by" name="distributed_by" value="{{ old('distributed_by', $resource->distributed_by) }}" required>
        </div>

        <!-- Status -->
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="distributed" {{ old('status', $resource->status) == 'distributed' ? 'selected' : '' }}>Distributed</option>
                <option value="pending" {{ old('status', $resource->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="in-progress" {{ old('status', $resource->status) == 'in-progress' ? 'selected' : '' }}>In Progress</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary active">Update Resource Distribution</button>
        <a href="{{ route('resource.list') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>

@endsection
