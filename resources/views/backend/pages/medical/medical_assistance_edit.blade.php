@extends('backend.pages.master')
@section('content')

<div class="container">
    <h2>Edit Medical Assistance</h2>

    <!-- Medical Assistance Edit Form -->
    <form action="{{ route('assistance.update', $list->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Shelter Name -->
        <div class="form-group">
            <label for="shelter_name">Shelter Name</label>
            <input type="text" class="form-control" id="shelter_name" name="shelter_name" value="{{ old('shelter_name', $list->shelter_name) }}" required>
        </div>

        <!-- Medical Supplies Available -->
        <div class="form-group">
            <label for="supplies">Medical Supplies Available</label>
            <textarea class="form-control" id="supplies" name="supplies" required>{{ old('supplies', $list->supplies) }}</textarea>
        </div>

        <!-- Medical Personnel Availability -->
        <div class="form-group">
            <label for="personnel">Medical Personnel Availability</label>
            <textarea class="form-control" id="personnel" name="personnel" required>{{ old('personnel', $list->personnel) }}</textarea>
        </div>

        <!-- Medical Assistance Status -->
        <div class="form-group">
            <label for="status">Medical Assistance Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="active" {{ old('status', $list->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="completed" {{ old('status', $list->status) == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <!-- Health Conditions Noted -->
        <div class="form-group">
            <label for="health_conditions">Health Conditions Noted</label>
            <textarea class="form-control" id="health_conditions" name="health_conditions">{{ old('health_conditions', $list->health_conditions) }}</textarea>
        </div>

        <!-- Emergency Response Team -->
        <div class="form-group">
            <label for="response_team">Emergency Response Team (Contact)</label>
            <input type="text" class="form-control" id="response_team" name="response_team" value="{{ old('response_team', $list->response_team) }}" required>
        </div>

        <!-- Medical Facilities Available -->
        <div class="form-group">
            <label for="facilities">Medical Facilities Available</label>
            <div>
                <input type="checkbox" id="first_aid" name="facilities[]" value="First Aid" 
                {{ in_array('First Aid', old('facilities', explode(',', $list->facilities))) ? 'checked' : '' }}> 
                <label for="first_aid">First Aid</label>
                <input type="checkbox" id="emergency_care" name="facilities[]" value="Emergency Care" 
                {{ in_array('Emergency Care', old('facilities', explode(',', $list->facilities))) ? 'checked' : '' }}> 
                <label for="emergency_care">Emergency Care</label>
                <input type="checkbox" id="ambulance_service" name="facilities[]" value="Ambulance Service" 
                {{ in_array('Ambulance Service', old('facilities', explode(',', $list->facilities))) ? 'checked' : '' }}> 
                <label for="ambulance_service">Ambulance Service</label>
                <input type="checkbox" id="psychosocial_support" name="facilities[]" value="Psychosocial Support" 
                {{ in_array('Psychosocial Support', old('facilities', explode(',', $list->facilities))) ? 'checked' : '' }}> 
                <label for="psychosocial_support">Psychosocial Support</label>
            </div>
        </div>

        <!-- Last Medical Assistance Date -->
        <div class="form-group">
            <label for="last_assistance_date">Last Medical Assistance Date</label>
            <input type="date" class="form-control" id="last_assistance_date" name="last_assistance_date" value="{{ old('last_assistance_date', $list->last_assistance_date) }}" required>
        </div>

        <!-- Number of People Served -->
        <div class="form-group">
            <label for="people_served">Number of People Served</label>
            <input type="number" class="form-control" id="people_served" name="people_served" value="{{ old('people_served', $list->people_served) }}" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary active">Update Medical Assistance</button>
        <a href="{{ route('assistance.list') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>

@endsection
