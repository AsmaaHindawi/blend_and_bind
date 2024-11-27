@extends('layouts.app')

@section('title', 'Blend & Bind')

@section('content')

<style>
#our-zones h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #444;
    text-transform: uppercase;
    margin-bottom: 2rem;
    letter-spacing: 1px;
}

/* Zone Card */
.zone-card {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Stronger shadow for a professional look */
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    padding: 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: auto; /* Allow height to adjust based on content */
}

/* Ensure all cards in a row have the same height */
.row-cols-1 > .col, .row-cols-md-2 > .col {
    display: flex;
    align-items: stretch;
}

.zone-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3); /* Stronger shadow on hover */
}

/* Image Container */
.zone-image-container img {
    width: 100%;
    height: 200px; /* Fixed height for consistent size */
    object-fit: cover;
    border-bottom: 3px solid #007bff; /* Accent color border */
    transition: transform 0.3s ease;
}

.zone-card:hover .zone-image-container img {
    transform: scale(1.05);
}

/* Image Styling */
.zone-img {
    width: 100%;
    height: 200px; /* Fixed image height for uniformity */
    object-fit: cover;
    border-radius: 10px;
}

/* Zone Info */
.zone-info {
    padding: 20px;
    text-align: center;
    flex-grow: 1; /* Ensures consistent spacing inside the cards */
}

.zone-info h3 {
    font-size: 1.5rem;
    color: #007bff;
    font-weight: 600;
    margin-bottom: 10px;
}

.zone-info p {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
}

/* Zone Description Styling */
.zone-description {
    font-size: 1.2rem;
    color: #555;
    line-height: 1.8;
    margin-top: 15px;
}

/* Responsive Design */
@media (max-width: 767px) {
    .zone-card {
        flex-direction: column;
        height: auto; /* Adjusts height for smaller screens */
    }

    #our-zones h2 {
        font-size: 2rem;
    }

    .zone-image-container img {
        height: 150px; /* Reduced height for mobile screens */
    }
}

@media (max-width: 767px) {
    .zone-card {
        padding: 15px;
    }

    .zone-img {
        height: 150px;
    }

    .zone-description {
        font-size: 1rem;
    }

}

/* Header Section */
.header-banner {
        position: relative;
        overflow: hidden;
    }

    .header-banner img {
        height: 300px;
        object-fit: cover;
    }

    .header-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .header-title {
        font-family: 'Dancing Script', cursive;
        font-size: 48px;
        font-weight: bold;
        margin-bottom: 20px;
        color: white;
    }

    .modal-body {
    padding: 15px;
}

.form-label {
    margin-bottom: 5px;
}

#reservationModal input, 
    #reservationModal select {
        color: black  !important;/* Ensures input text is black */
    }

</style>

<!--
<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(images/bg_1p.png);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">
  
          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Zones</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Zone</span></p>
          </div>
  
        </div>
      </div>
    </div>
  </section>-->
 

  <div class="container-fluid px-0">
    <!-- Header Section -->
    <div class="header-banner position-relative">
        <img src="{{ asset('images/ouvrir-un-coffee-shop-etapes.jpg') }}" alt="Zone Header" class="w-100">
        <div class="header-overlay text-center">
            <h1 class="header-title mt-5">Our Zones</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Zones</span></p>
        </div>
    </div>
    
</div>


    <!-- Section 1: Coffee Shop Zones -->
    <section id="our-zones" class=" container mt-5 py-5">
    <div class="container">
        <h2 class="text-center mb-5">Explore Our Zones</h2>
        <div class="row g-4">
            <!-- Coffee Place -->
            <div class="col-12 col-md-6">
                <div class="zone-card">
                    <div class="zone-image-container">
                        <img src="{{ asset('images/zones-coffeeplace.webp') }}" alt="Coffee Place">
                    </div>
                    <div class="zone-info">
                        <h3>Coffee Place</h3>
                        <p>Step into our Coffee Place, a warm and inviting space designed for moments of relaxation and rejuvenation. Here, you can savor the finest brews crafted from premium beans, offering rich flavors that awaken your senses. Whether you’re meeting with friends, enjoying a solo break, or seeking inspiration for your next big idea, this cozy corner provides the perfect ambiance to sip, chat, and unwind.</p>
                    </div>
                </div>
            </div>
            <!-- Study Rooms -->
            <div class="col-12 col-md-6">
                <div class="zone-card">
                    <div class="zone-image-container">
                        <img src="{{ asset('images/IMG_1212.jpg') }}" alt="Study Rooms">
                    </div>
                    <div class="zone-info">
                        <h3>Study Rooms</h3>
                        <p>Discover your productivity haven in our thoughtfully designed Study Rooms. These quiet, private spaces are tailored for focused studying, group discussions, and collaborative projects. Each room is equipped with ergonomic furniture, ample lighting, and all the tools you need to concentrate and achieve your goals. Step in and transform your ideas into reality, free from distractions.</p>
                    </div>
                </div>
            </div>
            <!-- Games Room -->
            <div class="col-12 col-md-6">
                <div class="zone-card">
                    <div class="zone-image-container">
                        <img src="{{ asset('images/zones-gaming.jpg') }}" alt="Games Room">
                    </div>
                    <div class="zone-info">
                        <h3>Games Room</h3>
                        <p>Unleash your inner gamer in our state-of-the-art Games Room, a dynamic space brimming with fun and excitement. Equipped with the latest gaming consoles, board games, and interactive entertainment, it’s a haven for friendly competition and laughter. Whether you're battling it out in a virtual tournament or enjoying classic board games with friends, the Games Room is your go-to spot for memorable moments.</p>
                    </div>
                </div>
            </div>
            <!-- Library -->
            <div class="col-12 col-md-6">
                <div class="zone-card">
                    <div class="zone-image-container">
                        <img src="{{ asset('images/Essential-Books.jpg') }}" alt="Library">
                    </div>
                    <div class="zone-info">
                        <h3>Library</h3>
                        <p>Immerse yourself in the world of knowledge and creativity in our serene Library. With an extensive collection of books, journals, and digital resources, it caters to curious minds and passionate learners. The tranquil atmosphere and comfortable seating provide the perfect setting to dive into your favorite books, research topics, or find inspiration for your next project. A sanctuary for learning and growth awaits you here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="events-reservation" class="py-5" style="background-color: #f0f4f8; width: 100%; margin-bottom: 50px;">
    <div class="container">
        <h2 class="text-center mb-5" style="font-family: 'Poppins', sans-serif; font-size: 2.5rem; color: #333;">Events Reservation</h2>
        <div class="row g-4">
            <!-- Coffee Shop Reservation -->
            <div class="col-12">
                <div class="d-flex flex-wrap bg-white rounded-3 shadow-lg p-4">
                    <div class="col-md-6">
                        <img src="{{ asset('images/reservetable.jpg') }}" alt="Coffee Shop" class="rounded" style="height: 300px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center px-4">
                        <h3 class="fw-bold" style="font-size: 1.8rem; color: #444;">Reserve Coffee Shop</h3>
                        <p style="color: #666; line-height: 1.8; font-size: 1rem;">Plan your next big event at our coffee shop or enjoy a cozy table for two. Flexible reservations tailored to your needs!</p>
                        <div class="d-flex flex-wrap gap-3 mt-3">
                            <button class="btn btn-primary px-4 py-2 w-100 w-md-auto" style="font-size: 1rem;" data-bs-toggle="modal" data-bs-target="#reservationModal">Reserve Table - ID:1</button>
                            <button class="btn btn-warning px-4 py-2 w-100 w-md-auto" style="font-size: 1rem;" data-bs-toggle="modal" data-bs-target="#reservationModal">Reserve Coffee Place - ID:2</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Study Room Reservation -->
            <div class="col-12">
                <div class="d-flex flex-wrap bg-white rounded-3 shadow-lg p-4">
                    <div class="col-md-6">
                        <img src="{{ asset('images/reservestudy.webp') }}" alt="Study Room" class=" rounded" style="height: 300px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center px-4">
                        <h3 class="fw-bold" style="font-size: 1.8rem; color: #444;">Reserve Study Room</h3>
                        <p style="color: #666; line-height: 1.8; font-size: 1rem;">Need a quiet place for studying or collaborating? Book one of our private study rooms today.</p>
                        <button class="btn btn-primary px-4 py-2 w-100 w-md-auto mt-3" style="font-size: 1rem;" data-bs-toggle="modal" data-bs-target="#reservationModal">Reserve Study Room - ID:3</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">


        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Reservation Form -->
         
        

<!-- Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="max-width: 500px;">
        <div class="modal-content">
            <!-- Background Image Overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('{{ asset('images/reserve2.jpg') }}'); background-size: cover;  background-position: center;   filter: brightness(40%); border-radius: 0.5rem; z-index: 0;">
            </div>

            <div class="modal-header border-0" style="z-index: 2; position: relative;">
                <h4 class="modal-title text-white">Make Your Reservation</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body text-white position-relative" style="z-index: 2;">
                <form id="reservation-form" action="{{ route('reservations') }}" method="POST" class="p-3">
                    @csrf
                    <div class="row g-3">
                        <!-- Zone ID -->
                        <div class="col-md-12">
                            <label for="zone_id" class="form-label">Zone ID</label>
                            <input type="number" name="zone_id" id="zone_id" class="form-control" placeholder="Enter Zone ID" required>
                        </div>

                        <!-- Name -->
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <!-- Email -->
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                        </div>

                        <!-- Reservation Date -->
                        <div class="col-md-6">
                            <label for="reservation_date" class="form-label">Date</label>
                            <input type="date" name="reservation_date" id="reservation_date" class="form-control" required>
                        </div>

                        <!-- Reservation Time -->
                        <div class="col-md-6">
                            <label for="reservation_time" class="form-label">Time</label>
                            <input type="time" name="reservation_time" id="reservation_time" class="form-control" required>
                        </div>

                        <!-- Capacity -->
                        <div class="col-md-6">
                            <label for="capacity" class="form-label">Capacity</label>
                            <input type="number" name="capacity" id="capacity"  placeholder="People" required>
                        </div>

                        <!-- Type -->
                        <div class="col-md-6">
                            <label for="type" class="form-label">Type</label>
                            <select name="type" id="type" class="form-select" required>
                                <option value="table">Table</option>
                                <option value="coffee place">Coffee Place</option>
                                <option value="study room">Study Room</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-12">
                        <button type="submit" class="btn btn-warning px-4 py-2 w-100" style="border-radius: 10px;">Reserve</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection