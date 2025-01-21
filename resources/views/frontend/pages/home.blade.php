@extends('frontend.master');




@section('content')




        <!-- Carousel Start -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            <!-- Carousel Item 1 -->
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="{{('/frontend/img/p2.png')}}" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>Donate Today to Help Families in Need</h1>
                    <p>
                        Your contribution will help us provide food, shelter, and medical aid to those affected by the flood disaster.
                    </p>
                    
                </div>
            </div>

            <!-- Carousel Item 2 -->
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="{{('/frontend/img/p3.jpg')}}" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>Join Our Volunteer Team</h1>
                    <p>
                        Help us make a difference. Volunteers are needed to support flood relief efforts, provide aid, and assist in shelters.
                    </p>
                   
                </div>
            </div>

            <!-- Carousel Item 3 -->
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="{{('/frontend/img/p4.jpg')}}" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>Support the Fight Against Floods</h1>
                    <p>
                        Floods are devastating. Your donation supports relief efforts and brings hope to affected communities.
                    </p>
                   
                </div>
            </div>

            <!-- Carousel Item 4 -->
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="{{('/frontend/img/p1.png')}}" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>Help Us Provide Medical Aid to Victims</h1>
                    <p>
                        Together, we can provide essential medical care to flood victims who urgently need support during the crisis.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

       <!--on going crisis start  -->
       <div class="container-fluid p-0">
    <!-- Hero Section -->
    

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

                                @guest('volunteerGuard')
                                <a href="{{route('crisis.show',$crisis->id)}}" class="btn btn-primary">Learn More</a>
                                <a href="{{route('donar.form',$crisis->id)}}" class="btn btn-custom">Donate Now</a>
                                @endguest

                                @auth('volunteerGuard')
                                <a href="{{route('crisis.show',$crisis->id)}}" class="btn btn-primary">Learn More</a>
                                <a href="" class="btn btn-success">Volunteer to Work</a>
                                @endauth
                                             
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

   
       <!--on going crisis end  -->

       
        

<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Image Section -->
            <div class="col-lg-6">
                <div class="about-img" style="background-image: url('{{('/frontend/img/p.png')}}'); height: 400px; background-size: cover; background-position: center;">
                    <!-- Parallax effect: You can remove this if you don't want parallax -->
                </div>
            </div>

            <!-- Right Column: Text Section -->
            <div class="col-lg-6">
                <div class="section-header">
                    <p>Learn About Us</p>
                    <h2>Flood Relief and Management in Bangladesh</h2>
                </div>
                <div class="about-tab">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- About Tab -->
                        <div id="tab-content-1" class="container tab-pane active">
                            <p>Helpz is a dedicated platform focused on managing flood relief efforts in Bangladesh. With frequent floods affecting the country, especially in the monsoon season, Helpz connects volunteers, donors, and local organizations to ensure that affected communities receive timely and efficient aid. Our platform coordinates the distribution of essential resources, such as food, water, medicine, and shelter, to those in need, ensuring no one is left behind during times of crisis.</p>
                        </div>

                        <!-- Mission Tab -->
                        <div id="tab-content-2" class="container tab-pane fade">
                            <p>Our mission is to provide swift and coordinated flood relief efforts across Bangladesh. We aim to mobilize resources quickly and effectively to flood-affected areas, ensuring that families and communities have access to food, clean water, shelter, and medical assistance. Helpz is committed to providing not only emergency relief but also long-term support for communities as they recover from the devastating effects of floods.</p>
                        </div>

                        <!-- Vision Tab -->
                        <div id="tab-content-3" class="container tab-pane fade">
                            <p>Our vision is to create a unified network of volunteers, donors, and local organizations across Bangladesh, working together to address the challenges caused by frequent flooding. Through collaboration and technology, we aim to reduce the impact of floods and accelerate recovery efforts. We envision a future where the communities of Bangladesh are more resilient to natural disasters, with improved flood management systems and more efficient relief distribution.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>What We Do?</p>
            <h2>We believe that we can save more lives with you</h2>
        </div>
        <div class="row">
            <!-- Healthy Food Service -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-apple-alt"></i> 
                    </div>
                    <div class="service-text">
                        <h3>Healthy Food</h3>
                        <p>Providing nutritious food to improve the health of families and communities.</p>
                    </div>
                </div>
            </div>

            <!-- Pure Water Service -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-tint"></i> 
                    </div>
                    <div class="service-text">
                        <h3>Pure Water</h3>
                        <p>Access to clean and safe drinking water is essential for every community.</p>
                    </div>
                </div>
            </div>

            <!-- Health Care Service -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-hospital-alt"></i> 
                    </div>
                    <div class="service-text">
                        <h3>Health Care</h3>
                        <p>Providing medical care and support to those in need, ensuring well-being and recovery.</p>
                    </div>
                </div>
            </div>

            <!-- Volunteering Service -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-hands-helping"></i> 
                    </div>
                    <div class="service-text">
                        <h3>Volunteering</h3>
                        <p>Join us in making a difference. We offer various volunteer opportunities for everyone.</p>
                    </div>
                </div>
            </div>

            <!-- Shelter Service -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-home"></i> 
                    </div>
                    <div class="service-text">
                        <h3>Shelter</h3>
                        <p>Providing safe and temporary shelter to those affected by natural disasters and crises.</p>
                    </div>
                </div>
            </div>

            <!-- Emergency Rescue Service -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <div class="service-text">
                        <h3>Emergency Rescue</h3>
                        <p>Our teams are ready to respond quickly to disasters, saving lives and providing urgent support.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->


        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="{{('/frontend/img/facts.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">6</h3>
                                <p>Division</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">40</h3>
                                <p>Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">10</h3>
                                <p>Our Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">50</h3>
                                <p>Raised</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        

<!-- Causes Start -->
<div class="causes">
    <div class="container">
        <div class="section-header text-center">
            <p>Popular Causes</p>
            <h2>Join hands to support flood relief efforts in Bangladesh</h2>
        </div>
        <div class="owl-carousel causes-carousel">
            <div class="causes-item">
                <div class="causes-img">
                    <img src="{{('/frontend/img/p11.jpg')}}" alt="Emergency Food Distribution">
                </div>
                <div class="causes-text">
                    <h3>Emergency Food Distribution</h3>
                    <p>Providing essential food supplies to flood-affected families in remote areas of Bangladesh.</p>
                </div>
                <div class="causes-btn">
                    <a href="" class="btn btn-custom">Donate Now</a>
                   
                </div>
            </div>
            <div class="causes-item">
                <div class="causes-img">
                    <img src="{{('/frontend/img/p12.jpg')}}" alt="Shelter Assistance">
                </div>
                <div class="causes-text">
                    <h3>Shelter Assistance</h3>
                    <p>Constructing temporary shelters for families displaced by severe flooding.</p>
                </div>
                <div class="causes-btn">
                    
                <a href="" class="btn btn-custom">Donate Now</a>
                </div>
            </div>
            <div class="causes-item">
                <div class="causes-img">
                    <img src="{{('/frontend/img/p13.jpg')}}" alt="Medical Aid">
                </div>
                <div class="causes-text">
                    <h3>Medical Aid</h3>
                    <p>Providing urgent medical assistance and supplies to those affected by flood-borne diseases.</p>
                </div>
                <div class="causes-btn">
                    
                <a href="" class="btn btn-custom">Donate Now</a>
                </div>
            </div>
            <div class="causes-item">
                <div class="causes-img">
                    <img src="{{('/frontend/img/p14.jpg')}}" alt="Clean Water Supply">
                </div>
                <div class="causes-text">
                    <h3>Clean Water Supply</h3>
                    <p>Ensuring access to clean and safe drinking water for flood-affected communities.</p>
                </div>
                <div class="causes-btn">
                  
                <a href="" class="btn btn-custom">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Causes End -->


        
        
<!-- Donate Start -->
<div class="donate" data-parallax="scroll" data-image-src="{{('/frontend/img/donate.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="donate-content">
                    <div class="section-header">
                        <p>Donate Now</p>
                        <h2>Your support can rebuild lives affected by floods</h2>
                    </div>
                    <div class="donate-text">
                        <p>
                            Millions in Bangladesh are affected by devastating floods every year. Your generous donation helps provide food, shelter, medical aid, and clean water to those in need. Together, we can bring hope to flood-affected communities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="donate-form">
                    <form action="" method="POST">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required="required" />
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="required" />
                        </div>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-custom active">
                                <input type="radio" name="amount" value="10" checked> BDT-10
                            </label>
                            <label class="btn btn-custom">
                                <input type="radio" name="amount" value="20"> BDT-20
                            </label>
                            <label class="btn btn-custom">
                                <input type="radio" name="amount" value="50"> $50
                            </label>
                            <label class="btn btn-custom">
                                <input type="radio" name="amount" value="100"> BDT-100
                            </label>
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit">Donate Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donate End -->

        
        
       
  <!-- Volunteer Start -->
<div class="volunteer" data-parallax="scroll" data-image-src="{{('/frontend/img/volunteer.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="volunteer-button">
                    <a href="{{ route('create') }}" class="btn btn-custom btn-lg">Become a Volunteer</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="volunteer-content">
                    <div class="section-header">
                        <p>Become A Volunteer</p>
                        <h2>Join us to make a difference in flood-affected communities</h2>
                    </div>
                    <div class="volunteer-text">
                        <p>
                            Floods have devastating impacts on lives and livelihoods. By volunteering, you can directly help communities recover and rebuild. Whether it's providing relief materials, assisting in shelters, or organizing support, your contribution matters!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Volunteer End -->



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
                           
                          <img src="{{ url('frontend/uploads/'. $data->image) }}" alt="" width="150">
                           

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
        
        
       
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="contact-img">
                    <img src="{{('/frontend/img/contact.jpg')}}" alt="Image">
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Blog</p>
            <h2>Latest news & articles on flood relief and recovery</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{('/frontend/img/blog-1.jpg')}}" alt="Flood Relief Event">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Emergency Flood Relief Response</a></h3>
                        <p>
                            Stay updated on the latest emergency relief operations that are making a difference in affected regions. Our teams are providing vital support to communities in need.
                        </p>
                    </div>
                    <div class="blog-meta">
                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                        <p><i class="fa fa-comments"></i><a href="">5 Comments</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{('/frontend/img/blog-2.jpg')}}" alt="Volunteers at Work">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">The Role of Volunteers in Recovery</a></h3>
                        <p>
                            Volunteers play a crucial role in the aftermath of floods. Learn how you can get involved and help affected communities during the recovery process.
                        </p>
                    </div>
                    <div class="blog-meta">
                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                        <p><i class="fa fa-comments"></i><a href="">12 Comments</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{('/frontend/img/blog-3.jpg')}}" alt="Relief Distribution">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Resource Distribution and Relief Efforts</a></h3>
                        <p>
                            Our teams are tirelessly working to distribute essential resources to communities in need. Find out how your donations are being used to support flood victims.
                        </p>
                    </div>
                    <div class="blog-meta">
                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                        <p><i class="fa fa-comments"></i><a href="">8 Comments</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection