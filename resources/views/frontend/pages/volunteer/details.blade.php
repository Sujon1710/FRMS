@extends('frontend.master')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <!-- Volunteer Profile Card -->
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">{{ $singleview->name }}</h3>
                </div>
                <div class="card-body">
                    <!-- Volunteer Image -->
                    <div class="text-center mb-4">
                        
                   <img src="{{ url('/frontend/uploads/' . $singleview->image) }}" alt="Volunteer Image"  width="150">
                        
                    </div>

                    <!-- Volunteer Details -->
                    <h5>Email:</h5>
                    <p>{{ $singleview->email }}</p>

                    <h5>Mobile:</h5>
                    <p>{{ $singleview->mobile }}</p>

                    <h5>Address:</h5>
                    <p>{{ $singleview->address }}</p>

                    <h5>Availability:</h5>
                   <p>{{$singleview->availability}}</p>

                    <!-- Back to List Button -->
                    <a href="{{route('frontend.home')}}" class="btn btn-secondary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





