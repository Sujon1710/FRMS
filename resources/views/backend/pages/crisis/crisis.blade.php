@extends('backend.pages.master')

@section('content')

<div class="container">
    <h2>Create a New Crisis</h2>

    <form action="{{route('crises.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Crisis Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Crisis Description:</label>
            <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <select id="location" name="location" class="form-control" required>
                <option value="Dhaka">Dhaka</option>
                <option value="Mymensing">Mymensing</option>
                <option value="Sirajgonj">Sirajgonj</option>
                <option value="Kapasia">Kapasia</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" id="end_date" name="end_date" class="form-control">
        </div>

        <div class="form-group">
            <label for="category">Category:</label>
            <select id="category" name="category" class="form-control" required>
                <option value="Flood">Flood</option>
                <option value="Earthquake">Earthquake</option>
                <option value="Fire">Fire</option>
                <option value="Storm">Storm</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="severity_level">Severity Level (1-5):</label>
            <input type="number" id="severity_level" name="severity_level" class="form-control" min="1" max="5" required>
        </div>

        <div class="form-group">
            <label for="affected_people">Number of Affected People:</label>
            <input type="number" id="affected_people" name="affected_people" class="form-control" min="1" required>
        </div>

        <div class="form-group">
            <label for="raise_amount">Raise Amount:</label>
            <input type="number" id="raise_amount" name="raise_amount" class="form-control" min="0"  required>
        </div>

        <div class="form-group">
            <label for="budget">Budget:</label>
            <input type="number" id="budget" name="budget" class="form-control" min="0"  required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary active">Submit</button>
    </form>
</div>

@endsection
