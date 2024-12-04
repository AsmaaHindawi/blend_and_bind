<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blend & Bind')</title>

    <!-- Include Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome and Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Include SheetJS Library from a CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>


    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <!-- Vite App Entry Point -->
    @vite('resources/js/app.js')
    @stack('styles')

    <!-- Search Links -->
    <script src="{{ asset('js/search.js') }}"></script>
    <!-- Favorite Links -->
    <script src="{{ asset('js/favorite.js') }}"></script>

    <!-- Additional Assets -->
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')

    <!-- Additional Inline Styles -->
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .main-content {
            min-height: calc(100vh - 150px);
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>

<body class="bg-light text-dark">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-white ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/BlendnBind.png') }}" alt="Blend & Bind Logo" class="me-3"
                    style="width: 100px; height: 70px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="text-custom-primary">Menu</span>
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <!-- Home Link -->
                    <li class="nav-item text-custom-primary">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>

                    <!-- Common Links for Logged-in Users and Non-logged-in Users -->
                    <li class="nav-item text-custom-primary">
                        <a href="{{ route('about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>

                    @auth
                        <!-- Links for Admin Users -->
                        @if (auth()->user()->role == 'admin')
                            <li class="nav-item">
                                <a href="{{ route('admin') }}" class="nav-link">Admin Dashboard</a>
                            </li>
                        @endif

                        <!-- Links for Logged-in Clients (not Admins) -->
                        @if (auth()->user()->role != 'admin')
                            <!-- Services Dropdown for Clients -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Services</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown03">
                                    <a class="dropdown-item" href="{{ route('menu') }}">Menu</a>
                                    <a class="dropdown-item" href="{{ route('games') }}">Games</a>
                                    <a class="dropdown-item" href="{{ route('books') }}">Books</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('reservations') }}" class="nav-link">Zones</a>
                            </li>
                        @endif
                        <!-- Logout Link for All Authenticated Users -->
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                        </li>
                    @else
                        <!-- Links for Non-logged-in Users -->
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                    @endauth

                    <li class="nav-item cart">
                        <a href="{{ route('cart') }}" class="nav-link">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <div class="main-content">
        @yield('content')
    </div>

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
                        <li><a class="text-white" href="{{ route('login') }}">Login</a></li>
                        <li><a class="text-white" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <!-- Second Column: Get Help -->
                <div class="col">
                    <h4 class="h4 fw-bold mb-3 text-white">Get Help</h4>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="{{ route('home') }}">FAQ</a></li>
                        <li><a class="text-white" href="{{ route('reservations') }}">Reservation Status</a></li>
                        <li><a class="text-white" href="{{ route('checkout') }}">Payment Options</a></li>
                    </ul>
                </div>
                <!-- Third Column: Follow Us -->
                <div class="col">
                    <h4 class="h4 fw-bold mb-3 text-white">Follow Us</h4>
                    <div>
                        <a href="https://www.facebook.com/" target="_blank" class="text-warning me-2"><i
                                class="icon-facebook fa-2x"></i></a>
                        <a href="https://www.instagram.com/" target="_blank" class="text-warning me-2"><i
                                class="icon-instagram fa-2x"></i></a>
                        <a href="https://www.youtube.com/" target="_blank" class="text-warning"><i
                                class="icon-youtube fa-2x"></i></a>
                    </div>
                </div>
                <!-- Fourth Column: Contact Button -->
                <div class="col d-flex align-items-start">
                    <a href="{{ route('contact') }}" class="btn btn-warning text-dark fw-bold">Contact Us</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Include All JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
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
    @stack('scripts')


</body>

</html>
