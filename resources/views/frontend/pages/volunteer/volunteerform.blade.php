@extends('frontend.master')

@section('content')
    
<div class="row" style="margin-top: 20px;" >

    <div class="col-md-2 b"> 
    </div>

    <div class="col-md-8" >
        <h1>Fill up the form</h1>
        <form action="{{route('create.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="volunteerName">Name</label>
                <input name="name" type="text" class="form-control" id="donorName" placeholder="Enter Name" required>
            </div>
            
            <div class="form-group">
                <label for="volunteerEmail">Email</label>
                <input name="email" type="email" class="form-control" id="donorEmail" placeholder="Enter Email" required>
            </div>

             
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-container">
                    <input id="password" name="password" type="password" class="form-control" placeholder="Enter Password" required>
                    <button type="button" class="btn btn-outline-secondary toggle-password" onclick="togglePassword('password')">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <div class="input-container">
                    <input id="confirm_password" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
                    <button type="button" class="btn btn-outline-secondary toggle-password" onclick="togglePassword('confirm_password')">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label for="volunteerMobile">Mobile Number</label>
                <input name="number" type="tel" class="form-control" id="donorMobile" placeholder="Enter Mobile Number" required>
            </div>

            <div class="form-group">
                <label for="volunteerAddress">Address</label>
                <textarea name="address" class="form-control" id="donorAddress" rows="3" placeholder="Enter Address" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input name="image" type="file" class="form-control">
            </div>

            <div class="form-group mt-2 mb-3">
                <label>Availability</label>
                <select name="availability" class="form-control">
                    <option value="available">Available</option>
                    <option value="unavailable">Unavailable</option>
                    <option value="on-duty">On Duty</option>
                </select>
            </div>

            <br>
            <button type="submit" class="btn btn-primary active">Register</button>
        </form>
    </div>

    <div class="col-md-2">
    </div>
</div>

<script>
    function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        const button = field.parentElement.querySelector('.toggle-password');
        const icon = button.querySelector('i');

        if (field.type === "password") {
            field.type = "text";
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            field.type = "password";
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>

@endsection
