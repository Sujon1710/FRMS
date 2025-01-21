@extends('backend.pages.master')
@section('content')

<div class="container">
    <h2>Edit Shelter</h2>

    <!-- Shelter Edit Form -->
    <form action="{{ route('shelter.update', $shelter->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Shelter Name -->
        <div class="form-group">
            <label for="name">Shelter Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $shelter->name) }}" required>
        </div>

        <!-- Shelter Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description', $shelter->description) }}</textarea>
        </div>

        <!-- Shelter Capacity -->
        <div class="form-group">
            <label for="capacity">Capacity</label>
            <input type="number" class="form-control" id="capacity" name="capacity" value="{{ old('capacity', $shelter->capacity) }}" required>
        </div>

        <!-- Shelter Location -->
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" class="form-control" value="{{ old('location', $shelter->location) }}" required>
        </div>

        <!-- Shelter Type -->
        <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type" required>
                <option value="Temporary" {{ old('type', $shelter->type) == 'Temporary' ? 'selected' : '' }}>Temporary</option>
                <option value="Permanent" {{ old('type', $shelter->type) == 'Permanent' ? 'selected' : '' }}>Permanent</option>
            </select>
        </div>

        <!-- Shelter Status -->
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="open" {{ old('status', $shelter->status) == 'open' ? 'selected' : '' }}>Open</option>
                <option value="closed" {{ old('status', $shelter->status) == 'closed' ? 'selected' : '' }}>Closed</option>
            </select>
        </div>

        <!-- Shelter Facilities (Optional) -->
        <div class="form-group">
            <label for="beds">Beds</label>
            <input type="number" class="form-control" id="beds" name="beds" value="{{ old('beds', $shelter->beds) }}" min="1">
        </div>

        <!-- Contact Details -->
        <div class="form-group">
            <label for="contact_person">Contact Person</label>
            <input type="text" class="form-control" id="contact_person" name="contact_person" value="{{ old('contact_person', $shelter->contact_person) }}">
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $shelter->phone_number) }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $shelter->email) }}">
        </div>

        <!-- Opening and Closing Dates -->
        <div class="form-group">
            <label for="opening_date">Opening Date</label>
            <input type="date" id="opening_date" name="opening_date" class="form-control" value="{{ old('opening_date', $shelter->opening_date) }}" required>
        </div>

        <div class="form-group">
            <label for="closing_date">Closing Date</label>
            <input type="date" id="closing_date" name="closing_date" class="form-control" value="{{ old('closing_date', $shelter->closing_date) }}" required>
        </div>

        <!-- Emergency Needs -->
        <div class="form-group">
            <label for="emergency_needs">Emergency Needs</label>
            <textarea class="form-control" id="emergency_needs" name="emergency_needs">{{ old('emergency_needs', $shelter->emergency_needs) }}</textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary active">Update Shelter</button>
        <a href="{{ route('shelter.list') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>

@endsection
