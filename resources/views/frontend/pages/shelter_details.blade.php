@extends('frontend.master')

@section('content')





<div class="container mt-2">
    <div class="row">
        <div class="col-md-8 offset-md-2">
           
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">{{ $singleview->name }}</h3>
                </div>
                <div class="card-body">
                 
                    <div class="text-center mb-4">
                        
                   <img src="{{ url('/backend/uploads/' . $singleview->image) }}" alt="organization picture"  width="150">
                        
                    </div>

                   
                    <h5>Description:</h5>
                    <p>{{ $singleview->description}}</p>

                    <h5>Capacity:</h5>
                    <p>{{ $singleview->capacity }}</p>

                    <h5>Location:</h5>
                    <p>{{ $singleview->location }}</p>

                    <h5>Type:</h5>
                   <p>{{$singleview->type}}</p>

                   <h5>Status:</h5>
                   <p>{{$singleview->status}}</p> 

                   <h5>Contact Person:</h5>
                   <p>{{$singleview->contact_person}}</p>

                   <h5>Opening date:</h5>
                   <p>{{$singleview->opening_date}}</p> 

                   <h5>Closing date:</h5>
                   <p>{{$singleview->closing_date}}</p> 

                   <h5>Raise Amount:</h5>
                   <p>{{$singleview->emergency_needs}}</p>
                   
                   
                    <!-- Back to List Button -->
                    <a href="{{route('frontend.home')}}" class="btn btn-secondary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>







    <!-- Related Actions -->
    <div class="row mt-5">
        <div class="col text-center">
            <a href="" class="btn btn-primary btn-lg">Donate Now</a>
            <a href="" class="btn btn-secondary btn-lg">Join as Volunteer</a>
        </div>
    </div>

    

@endsection
