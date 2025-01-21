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
                        
                   <img src="{{ url('/backend/uploads/' . $singleview->image) }}" alt="Volunteer Image"  width="150">
                        
                    </div>

                   
                    <h5>Description:</h5>
                    <p>{{ $singleview->description}}</p>

                    <h5>Location:</h5>
                    <p>{{ $singleview->location }}</p>

                    <h5>Strat Date:</h5>
                    <p>{{ $singleview->start_date }}</p>

                    <h5>End Date:</h5>
                   <p>{{$singleview->end_date}}</p>

                   <h5>Category:</h5>
                   <p>{{$singleview->category}}</p> 

                   <h5>Severity level:</h5>
                   <p>{{$singleview->severity_level}}</p>

                    <h5>Affected people:</h5>
                   <p>{{$singleview->affected_people}}</p> 

                   <h5>Raise Amount:</h5>
                   <p>{{$singleview->raise_amount}}</p>
                   
                   <h5>Budget:</h5>
                   <p>{{$singleview->budget}}</p>

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
