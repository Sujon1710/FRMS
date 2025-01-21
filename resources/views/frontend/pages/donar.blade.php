@extends('frontend.master')

@section('content')

<h2 class="mb-4 text-center">Donor Information Form</h2>

<div class="container shadow-lg p-5">
    <form action="{{route('donar.store')}}" method="POST">
        @csrf

         <!-- Hidden Field for Crisis ID -->
         <input type="hidden" name="crisis_id" value="{{ $crisis_id }}">


        
        <!-- Donor Name -->
        <div class="form-group mb-3">
            <label for="donorName" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="donorName" placeholder="Enter your full name" required>
        </div>
        
        <!-- Donor Email -->
        <div class="form-group mb-3">
            <label for="donorEmail" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="donorEmail" placeholder="Enter your email address" required>
        </div>
        
        <!-- Donor Mobile Number -->
        <div class="form-group mb-3">
            <label for="donorMobile" class="form-label">Mobile Number</label>
            <input name="mobile" type="tel" class="form-control" id="donorMobile" placeholder="Enter your mobile number" required>
        </div>
        
        <!-- Donor Address -->
        <div class="form-group mb-3">
            <label for="donorAddress" class="form-label">Address</label>
            <textarea name="address" class="form-control" id="donorAddress" rows="3" placeholder="Enter your address" required></textarea>
        </div>
        
        <!-- Donation Amount -->
        <div class="form-group mb-3">
            <label for="amount" class="form-label">Donation Amount</label>
            <input name="amount" type="number" step="1" class="form-control" id="amount" placeholder="Enter the amount you want to donate" required>
        </div>
        
       

        
        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary w-50">Submit Donation</button>
        </div>
    </form>
</div>

@endsection
