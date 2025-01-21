@extends('backend.pages.master')
@section('content')

<div class="container">
    <h2>Add New Medical Assistance</h2>

    <!-- Medical Assistance Form -->
    <form action="{{route('assistance.store')}}" method="POST">
        @csrf

        <!-- Shelter Name -->
        <div class="form-group">
            <label for="shelter_id">Shelter Name</label>
            <input class="form-control" id="shelter_name" name="shelter_name" required>
                
            
        </div>

        <!-- Medical Supplies Available -->
        <div class="form-group">
            <label for="supplies">Medical Supplies Available</label>
            <textarea class="form-control" id="supplies" name="supplies" required></textarea>
        </div>

        <!-- Medical Personnel Availability -->
        <div class="form-group">
            <label for="personnel">Medical Personnel Availability</label>
            <textarea class="form-control" id="personnel" name="personnel" required></textarea>
        </div>

        <!-- Medical Assistance Status -->
        <div class="form-group">
            <label for="status">Medical Assistance Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="active">Active</option>
                <option value="completed">Completed</option>
            </select>
        </div>

        <!-- Health Conditions Noted -->
        <div class="form-group">
            <label for="health_conditions">Health Conditions Noted</label>
            <textarea class="form-control" id="health_conditions" name="health_conditions"></textarea>
        </div>

        <!-- Emergency Response Team -->
        <div class="form-group">
            <label for="response_team">Emergency Response Team (Contact)</label>
            <input type="text" class="form-control" id="response_team" name="response_team" required>
        </div>

        <!-- Medical Facilities Available -->
        <div class="form-group">
            <label for="facilities">Medical Facilities Available</label>
            <div>
                <input type="checkbox" id="first_aid" name="facilities[]" value="First Aid"> <label for="first_aid">First Aid</label>
                <input type="checkbox" id="emergency_care" name="facilities[]" value="Emergency Care"> <label for="emergency_care">Emergency Care</label>
                <input type="checkbox" id="ambulance_service" name="facilities[]" value="Ambulance Service"> <label for="ambulance_service">Ambulance Service</label>
                <input type="checkbox" id="psychosocial_support" name="facilities[]" value="Psychosocial Support"> <label for="psychosocial_support">Psychosocial Support</label>
            </div>
        </div>

        <!-- Last Medical Assistance Date -->
        <div class="form-group">
            <label for="last_assistance_date">Last Medical Assistance Date</label>
            <input type="date" id="last_assistance_date" name="last_assistance_date" class="form-control" required>
        </div>

        <!-- Number of People Served -->
        <div class="form-group">
            <label for="people_served">Number of People Served</label>
            <input type="number" class="form-control" id="people_served" name="people_served" required>
        </div>

       

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary active">Create Medical Assistance</button>
        <a href="{{ route('assistance.list') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>

@endsection
