<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blend & Bind')</title>
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
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item text-custom-primary" href="{{ route('menu') }}" class="nav-link text-custom-primary">Menu</a>
                            <a class="dropdown-item text-custom-primary" href="{{ route('zones') }}" class="nav-link">Study Zones</a>
                            <a class="dropdown-item text-custom-primary" href="{{ route('games') }}" class="nav-link">Games</a>
                            <a class="dropdown-item text-custom-primary" href="{{ route('books') }}" class="nav-link">Books</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ route('events') }}" class="nav-link">Events</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item cart"><a href="cart.html" class="nav-link"><i class="fas fa-shopping-cart fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="d-flex align-items-center justify-content-center text-center position-relative" style="height: 100vh; background-image: url('http://localhost/blend_and_bind/public/images/background1.png'); background-size: cover; background-position: center;">
        <div class="position-absolute w-100 h-100"></div>
        <div class="position-relative z-1">
            <h2 class="fs-4 text-dark mb-4">Welcome to Our Blend of Books and Coffee!</h2>
            <a href="#about" class="btn btn-warning btn-lg">Tell Me More</a>
        </div>
    </header>
     <!-- End Hero Section -->

   <!-- info Section -->
    <section class="ftco-counter ftco-bg-light img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Coffee Branches</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="85">0</strong>
                                    <span>Number of Awards</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="10567">0</strong>
                                    <span>Happy Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="900">0</strong>
                                    <span>Staff</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- end info Section -->

 <!-- slider Section -->
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/IMG_1212.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-4">Quiet Place to Study and Work</h1>
                        <p class="mb-4 mb-md-5">Book your own room and enjoy the best moments of tranquility.</p>
                        <p><a href="{{ route('services') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Reserve Now</a></p>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="slider-item" style="background-image: url(images/Essential-Books.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-4">Buy Your Favorite Book</h1>
                        <p class="mb-4 mb-md-5">You can find all old and modern books around the world.</p>
                        <p><a href="{{ route('services') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Book Now</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(images/premium_photo-1719360604040-f1b162124df1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-4">Enjoy Playing With Your Friends</h1>
                        <p class="mb-4 mb-md-5">Find the most popular types of games to spend valuable time with friends.</p>
                        <p><a href="{{ route('services') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--end slider Section -->

    <!-- Menu Section -->
    <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading text-custom-primary">Discover</span>
	            <h2 class="mb-4 ">Our Menu</h2>
	            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	            <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Best Coffee Sellers</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        </div>
    	</div>
    </section>

    
     <!-- About Section -->
     <section class="py-20 bg-white text-gray-800">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">About Us</h2>
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('images/warmth-cafe-dull-day-oslo.jpg') }}" alt="About Image" class="img-fluid rounded-lg shadow-lg small-image">

                </div>
                <div class="col-md-6">
                    <h3 class="text-3xl font-semibold mb-6">Our Humble Beginnings</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, recusandae. Sunt ut voluptatem eius sapiente, totam reiciendis tempora!</p>
                </div>
            </div>
        </div>
    </section>
    

     <!-- Footer Section -->
     <footer class="py-5 bg-custom-primary text-white">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-3">
                <!-- First Column: Site Links -->
                <div class="col">
                    <h4 class="h4 fw-bold mb-3">Blend & Bind</h4>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="{{ route('home') }}">Home</a></li>
                        <li><a class="text-white" href="{{ route('about') }}">About</a></li>
                        <li><a class="text-white" href="{{ route('events') }}">Events</a></li>
                        <li><a class="text-white" href="{{ route('services') }}">Services</a></li>
                    </ul>
                </div>
                <!-- Second Column: Get Help -->
                <div class="col">
                    <h4 class="h4 fw-bold mb-3">Get Help</h4>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="#">FAQ</a></li>
                        <li><a class="text-white" href="#">Reservation Status</a></li>
                        <li><a class="text-white" href="#">Payment Options</a></li>
                    </ul>
                </div>
                <!-- Third Column: Follow Us -->
                <div class="col">
                    <h4 class="h4 fw-bold mb-3">Follow Us</h4>
                    <div>
                        <a href="https://www.facebook.com/" target="_blank" class="text-warning me-2"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="https://www.instagram.com/" target="_blank" class="text-warning me-2"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://twitter.com/" target="_blank" class="text-warning me-2"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="https://www.youtube.com/" target="_blank" class="text-warning"><i class="fab fa-youtube fa-2x"></i></a>
                    </div>
                </div>
                <!-- Fourth Column: Contact Button -->
                <div class="col d-flex align-items-start">
                    <a href="{{ route('contact') }}" class="btn btn-warning text-dark fw-bold">Contact Us</a>
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
