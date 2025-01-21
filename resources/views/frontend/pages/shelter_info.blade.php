@extends('frontend.master')

@section('content')

<div class="container py-5">
    <h1 class="text-center mb-4">Shelter Management</h1>
    <p class="text-center mb-5">Explore available shelters and their details below.</p>

    <div class="row">
                @foreach($list as $data)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                            <img src="{{ url('backend/uploads/'. $data->image) }}" alt=""  width="150">
                            </div>
                            <div class="team-text">
                                <h2>{{$data->name}}</h2>
                                <p>{{ $data->location }}</p>
                                <p>{{ $data->type}}</p>
                                <p>{{ $data->capacity}}</p>
                                <a href="{{route('shelter.details',$data->id)}}" type="button" class="btn btn-info">Details</a>
                               
                            </div>
                        </div>
                    </div>
             
                    @endforeach
                </div>
</div>

@endsection
