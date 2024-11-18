<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blend and Bind - Where Stories and Flavors Meet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    


    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light text-dark">

    <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-white ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/BlendnBind.png') }}" alt="Blend & Bind Logo" class="me-3" style="width: 100px; height: 70px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="text-custom-primary">Menu</span>
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-custom-primary"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item text-custom-primary"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03 ">
                            <a class="dropdown-item " href="{{ route('menu') }}" class="nav-link">Menu</a>
                            <a class="dropdown-item " href="{{ route('games') }}" class="nav-link">Games</a>
                            <a class="dropdown-item " href="{{ route('books') }}" class="nav-link">Books</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ route('zones') }}" class="nav-link">Zones</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item cart"><a href="{{ route('cart') }}" class="nav-link"><i class="fas fa-shopping-cart fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

 @yield('content')

     <!-- Footer Section -->
     <footer class="py-5 bg-custom-primary text-white">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-3">
                <!-- First Column: Site Links -->
                <div class="col">
                    <h4 class="h4 fw-bold mb-3 text-white">Blend & Bind</h4>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="{{ route('home') }}">Home</a></li>
                        <li><a class="text-white" href="{{ route('about') }}">About</a></li>
                        <li><a class="text-white" href="{{ route('services') }}">Zones</a></li>
                        <li><a class="text-white" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <!-- Second Column: Get Help -->
                <div class="col">
                    <h4 class="h4 fw-bold mb-3 text-white">Get Help</h4>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="#">FAQ</a></li>
                        <li><a class="text-white" href="#">Reservation Status</a></li>
                        <li><a class="text-white" href="#">Payment Options</a></li>
                    </ul>
                </div>
                <!-- Third Column: Follow Us -->
                <div class="col">
                    <h4 class="h4 fw-bold mb-3 text-white">Follow Us</h4>
                    <div>
                        <a href="https://www.facebook.com/" target="_blank" class="text-warning me-2"><i class="icon-facebook fa-2x"></i></a>
                        <a href="https://www.instagram.com/" target="_blank" class="text-warning me-2"><i class="icon-instagram fa-2x"></i></a>
                        <a href="https://www.youtube.com/" target="_blank" class="text-warning"><i class="icon-youtube fa-2x"></i></a>
                    </div>
                </div>
                <!-- Fourth Column: Contact Button -->
                <div class="col d-flex align-items-start">
                    <a href="{{ route('login') }} " class="btn btn-warning text-dark fw-bold">Login</a>
                </div>
            </div>
        </div>
    </footer>
    
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>