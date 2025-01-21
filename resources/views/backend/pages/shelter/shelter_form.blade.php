@extends('backend.pages.master')
@section('content')

    <div class="container">
        <h2>Add New Shelter' </h2>

        <!-- Shelter Form -->
        <form action="{{route('shelter.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            

            <!-- Shelter Name -->
            <div class="form-group">
                <label for="name">Shelter Name</label>
                <input type="text" class="form-control" id="name" name="name"  required>
            </div>

            <!-- Shelter Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <!-- Shelter Capacity -->
            <div class="form-group">
                <label for="capacity">Capacity</label>
                <input type="number" class="form-control" id="capacity" name="capacity" required>
            </div>

            <!-- Shelter Location -->
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" class="form-control" required>
            </div>


            <!-- Shelter Type -->
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="Temporary" >Temporary</option>
                    <option value="Permanent" >Permanent</option>
                </select>
            </div>

            <!-- Shelter Status -->
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="open" >Open</option>
                    <option value="closed" >Closed</option>
                </select>
            </div>

            <!-- Shelter Facilities (Optional) -->
            <div class="form-group">
                <label for="beds">Beds</label>
                <input type="number" class="form-control" id="beds" name="beds" min="1" >
            </div>

            <!-- Contact Details -->
            <div class="form-group">
                <label for="contact_person">Contact Person</label>
                <input type="text" class="form-control" id="contact_person" name="contact_person" >
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" >
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>

            <!-- Opening and Closing Dates -->
            <div class="form-group">
                <label for="opening_date">Opening Date</label>
                <input type="date" id="opening_date" name="opening_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="closing_date">Closing Date</label>
                <input type="date" id="closing_date" name="closing_date" class="form-control" required>
            </div>

            <!-- Emergency Needs -->
            <div class="form-group">
                <label for="emergency_needs">Emergency Needs</label>
                <textarea class="form-control" id="emergency_needs" name="emergency_needs"></textarea>
            </div>
            <div class="form-group">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control">
        </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary active">Create Shelter</button>
            <a href="{{ route('shelter.list') }}" class="btn btn-secondary">Back to List</a>

        </form>
    </div>




@endsection