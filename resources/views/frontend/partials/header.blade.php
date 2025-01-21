<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <!-- Logo and Name -->
        <a href="{{ route('frontend.home') }}" class="navbar-brand">
            <!-- Logo Image -->
            <img src="{{url('frontend/img/logo.png')}}" alt="Helpz Logo" style="width: 60px; height: 80px; margin-right: 8px;">
            Helpz
        </a>

        <div class="navbar-collapse justify-content-between">
            <div class="navbar-nav ml-auto">
                
                <!-- Home Link -->
                <a href="{{ route('frontend.home') }}" class="nav-item nav-link">Home</a>

                <!-- Crisis Link (Main Feature) -->
                <a href="{{ route('crisis') }}" class="nav-item nav-link">Ongoing Crisis</a>

                <!-- Donate Link -->
                <a href="" class="nav-item nav-link">Donate</a>

                <!-- Volunteer Dropdown -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Volunteer</a>
                    <div class="dropdown-menu">
                        <a href="{{route('volunteer.details')}}" class="dropdown-item">Volunteer Info</a>
                        <a href="{{route('create')}}" class="dropdown-item">Become a Volunteer</a>
                    </div>
                </div>

                <!-- Services Dropdown (Shelter, Medical Assistance) -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Help Services</a>
                    <div class="dropdown-menu">
                        <a href="{{route('shelter.info')}}" class="dropdown-item">Shelter Management</a>
                        <a href="" class="dropdown-item">Medical Assistance</a>
                    </div>
                </div>

                <!-- Login/Logout -->
               
<!-- Login Button in the Header -->
           @guest('volunteerGuard')

           <div >
          <a href="" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">
            
          <i class="fa fa-user" aria-hidden="true"></i>
              <span >
                Login  
              </span>
              </a>
             </div>
          @endguest


          @auth('volunteerGuard')
            <div style="padding-top: 10px;">
              
              <a href="{{route('volunteer.log_out')}}"  style="color:white">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  {{auth('volunteerGuard')->user()->name}} | Logout  
                </span>
              </a>
            </div>

            @endauth

                <!-- Reports  -->
                
                        <a href="" class="nav-item nav-link">Reports</a>
                    
                

                <!-- Contact Link -->
                <a href="" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->


<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <form action="{{route('volunteer.login')}}" method="post">
          @csrf
        
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
      </div>
      <!-- Modal Footer -->
      <div class="modal-footer">
        <p class="text-center w-100">Don't have an account? <a href="{{route('create')}}">Register here</a></p>
      </div>
    </div>
  </div>
</div>

