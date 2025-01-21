@extends('backend.pages.master')
@section('content')



<div class="container">
    <h2>Add New Resource Distribution</h2>

    <!-- Resource Distribution Form -->
    <form action="{{ route('resource.store') }}" method="POST">
        @csrf

        <!-- Distribution Date -->
        <div class="form-group">
            <label for="distribution_date">Distribution Date</label>
            <input type="date" class="form-control" id="distribution_date" name="distribution_date" required>
        </div>

         <!-- Resource Type -->
         <div class="form-group">
            <label for="resource_type">Resource Type</label>
            <select class="form-control" id="resource_type" name="resource_type" required>
                <option value="" disabled selected>Select Resource Type</option>
                <option value="Food">Food</option>
                <option value="Water">Water</option>
                <option value="Clothing">Clothing</option>
                <option value="Medicine">Medicine</option>
                <option value="Shelter Supplies">Shelter Supplies</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <!-- Quantity -->
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
        </div>

        <!-- Location -->
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>

        <!-- Beneficiaries -->
        <div class="form-group">
            <label for="beneficiaries">Number of Beneficiaries</label>
            <input type="number" class="form-control" id="beneficiaries" name="beneficiaries" min="1" required>
        </div>

        <!-- Distributed By -->
        <div class="form-group">
            <label for="distributed_by">Distributed By</label>
            <input type="text" class="form-control" id="distributed_by" name="distributed_by" required>
        </div>

        <!-- Resource Status -->
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="distributed">Distributed</option>
                <option value="pending">Pending</option>
                <option value="in-progress">In Progress</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary active">Create Resource Distribution</button>
        <a href="{{ route('resource.list') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>

@endsection