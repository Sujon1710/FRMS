@extends('frontend.master')

@section('content')


           

<!-- Team Start -->
<div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Volunteers</p>
                    <h2>Awesome guys behind our Success and good activities</h2>
                </div>
               
                <div class="row">
                @foreach($list as $data)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                            <img src="{{ url('frontend/uploads/'. $data->image) }}" alt=""  width="150">
                            </div>
                            <div class="team-text">
                                <h2>{{$data->name}}</h2>
                                <p>Founder & CEO</p>
                                <a href="{{route('view.details',$data->id)}}" type="button" class="btn btn-info">Details</a>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
             
                    @endforeach
                </div>
              
            </div>
        </div>
        <!-- Team End -->
        

         
@endsection