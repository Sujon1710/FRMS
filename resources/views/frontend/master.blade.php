<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HELPZ - Free Charity Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

      <!-- iconlink -->  
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


        <!-- Favicon -->
        <link href="{{('/frontend/img/favicon.ico')}}" rel="icon">

        
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flaticon@2.0.0/font/flaticon.css">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">


        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{('/frontend/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
        <link href="{{('/frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{('/frontend/lib/owlcarousel/assets/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{('/frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{('/frontend/lib/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
        <link href="{{('/frontend/lib/owlcarousel/assets/owl.theme.default.css')}}" rel="stylesheet">
        <link href="{{('/frontend/lib/owlcarousel/assets/owl.theme.green.min.css')}}" rel="stylesheet">
        <link href="{{('/frontend/lib/owlcarousel/assets/owl.theme.green.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{url('/frontend/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
      



    @include('frontend.partials.header')




    @yield('content')

        


    @include('frontend.partials.footer')
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('/frontend/lib/easing/easing.min.js')}}"></script>
        <script src="{{url('/frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{url('/frontend/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{url('/frontend/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{url('/frontend/lib/parallax/parallax.min.js')}}"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{url('/frontend/mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{url('/frontend/mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{url('/frontend/js/main.js')}}"></script>
        
    </body>
</html>
