@extends('layouts.app')

@yield('title')

@section('content')

<!-- Hero Section -->
<header class="d-flex align-items-center justify-content-center text-center position-relative responsive-header lazyload">
    <!-- Coffee Top Image -->
    <div class="position-absolute coffee-top">
        <img src="http://localhost/blend_and_bind/public/images/Layer 4 gg.png" style="background-size: cover; background-repeat: no-repeat;" class="img-fluid" alt="Coffee Top">
    </div>

    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
        <div class="col-md-8 col-sm-12 text-center ftco-animate">

            <!-- Welcome Message -->
            <span class="subheading" style="font-family: 'Great Vibes', cursive; font-size: 50px; color:#dfba8f;">Welcome</span>
            <h2 class="mb-4 text-custom-white">To Our Coffee Shop</h2>

            <!-- Search Bar -->
            <input
            type="text"
            id="searchTerm"
            wire:model="searchTerm"
            placeholder="Search site content..."
            class="form-control mb-5 search-bar-input">

        <!-- Search Results -->
        <div id="searchResults" class="search-results"></div>
        </div>
      </div>
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
                        <p><a href="{{ route('reservations') }}" class="btn btn-warning p-3 px-xl-4 py-xl-3">Show More</a></p>
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
                        <p><a href="{{ route('reservations') }}" class="btn btn-warning p-3 px-xl-4 py-xl-3">Show More</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(images/photo-1511512578047-dfb367046420.jpeg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-4">Enjoy Playing With Your Friends</h1>
                        <p class="mb-4 mb-md-5">Find the most popular types of games to spend valuable time with friends.</p>
                        <p><a href="{{ route('reservations') }}" class="btn btn-warning p-3 px-xl-4 py-xl-3">Show More</a></p>
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
	            <p class="mb-4"> Explore a variety of mouthwatering dishes and refreshing beverages crafted with the finest ingredients. Whether you're in the mood for a quick snack or a hearty meal, we have something for everyone!</p>
	            <p><a href="{{ route('menu') }}" class="btn btn-warning p-3 px-xl-4 py-xl-3">View Full Menu</a></p>
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
		    					<a href="#" class="img" style="background-image: url(images/dessert-4.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/dessert-5.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
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
            <p>Discover the favorites our customers can't get enough of! From creamy cappuccinos to bold espressos, our best-seller coffees are crafted to deliver the perfect blend of flavor and aroma. Treat yourself to the top picks that make every coffee moment unforgettable.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A perfect balance of rich espresso, steamed milk, and velvety foam, topped with a sprinkle of cocoa or cinnamon for a warm, indulgent experience</p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee</a></h3>
    						<p>Freshly brewed from the finest coffee beans, our classic coffee offers a bold and aromatic flavor to kickstart your day.</p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Milkshake</a></h3>
    						<p>A creamy blend of milk and ice cream, available in a variety of irresistible flavors like chocolate, vanilla, and strawberry. A treat that’s both refreshing and delightful.</p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Espresso</a></h3>
    						<p>An intense shot of pure coffee bliss, crafted from premium beans to deliver a rich, bold, and aromatic flavor that true coffee lovers adore.</p>
    					</div>
    				</div>
        	</div>
        </div>
       <div class="text-center"><p><a href="{{ route('menu') }}" class="btn btn-warning p-3 px-xl-4 py-xl-3 ">Show More</a></p></div>
    	</div>
    </section>


     <!-- About Section -->
     <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url(images/ouvrir-un-coffee-shop-etapes.jpg);"></div>
        <div class="one-half ftco-animate">
          <div class="overlap">
            <div class="heading-section ftco-animate">
              <span class="subheading">Discover</span>
              <h2 class="mb-4">Our Story</h2>
            </div>
            <div>
              <p>At Blend & Bind, our journey began with a shared passion for the things we love most—books, food, and games. One of our founding members, a book and food enthusiast, dreamed of creating a space that would bring the joys of reading and dining together. Inspired by this vision, a fellow teammate who adored games and gaming joined forces to craft an experience that balanced fun, flavor, and the charm of stories. With the addition of two more friends who shared similar passions, the dream began to take shape. Together, we created a cozy haven where people can sip, read, play, and connect—offering something special for everyone. Blend & Bind is more than just a café or a bookstore; it’s a celebration of creativity, community, and the things we love.</p>
            </div>
          </div>
        </div>
      </section>
@endsection


