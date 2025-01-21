@extends('frontend.master')

@section('content')

<div class="container-fluid p-0">
    <!-- Hero Section -->
    <div class="hero-section text-white text-center d-flex align-items-center justify-content-center" style="background: url('/frontend/img/hero-banner.jpg') no-repeat center center/cover; height: 80vh;">
        <div>
            <h1 class="display-4 fw-bold">Flood Relief And Management System</h1>
            <p class="lead">Coordinating disaster relief efforts for a better tomorrow</p>
            <a href="#get-involved" class="btn btn-primary btn-lg">Get Involved</a>
        </div>
    </div>

    <!-- About Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">About Our System</h2>
        <p class="text-center">
            Our Flood Relief Management System aims to streamline relief operations during disasters. 
            We provide tools to manage shelters, coordinate resources, and assist affected individuals in real-time. 
        </p>
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <i class="fas fa-hands-helping fa-3x text-primary"></i>
                <h4 class="mt-2">Volunteer Coordination</h4>
                <p>Organizing and assigning volunteers effectively.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-boxes fa-3x text-primary"></i>
                <h4 class="mt-2">Resource Management</h4>
                <p>Ensuring equitable distribution of essential resources.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-first-aid fa-3x text-primary"></i>
                <h4 class="mt-2">Medical Assistance</h4>
                <p>Providing urgent medical care and support.</p>
            </div>
        </div>
    </div>

    <!-- Ongoing Crises Section -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Ongoing Crises</h2>
            <div class="row">
                @foreach ($crises as $crisis)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ url('/backend/uploads/' . $crisis->image) }}" class="card-img-top" alt="Crisis Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $crisis->name }}</h5>
                                <p class="card-text">{{ $crisis->location }}</p>
                                <a href="{{route('crisis.show',$crisis->id)}}" class="btn btn-primary">Learn More</a>
                                <a href="{{route('donar.form',$crisis->id)}}" class="btn btn-custom">Donate Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Key Features</h2>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><i class="fas fa-check text-success"></i> Real-time resource tracking</li>
                    <li class="list-group-item"><i class="fas fa-check text-success"></i> Transparent donation handling</li>
                    <li class="list-group-item"><i class="fas fa-check text-success"></i> Detailed reports and analytics</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><i class="fas fa-check text-success"></i> Volunteer and shelter coordination</li>
                    <li class="list-group-item"><i class="fas fa-check text-success"></i> Crisis categorization and updates</li>
                    <li class="list-group-item"><i class="fas fa-check text-success"></i> Mobile-friendly user interface</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div id="get-involved" class="bg-success text-white text-center py-5">
        <h2>Join Us in Making a Difference</h2>
        <p>Sign up as a volunteer, donate resources, or explore our ongoing projects.</p>
        <a href="{{ route('create')}}" class="btn btn-light btn-lg mt-3">Get Involved</a>
    </div>

    

@endsection
