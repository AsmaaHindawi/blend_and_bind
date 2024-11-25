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
</style>


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
  </section>
 

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
<!-- Events Reservation-->
<!-- Events Reservation Section -->
<div id="events-reservation" class="py-5" style="background-color: #f0f4f8; width: 100%; margin-bottom: 50px;">
    <div class="container">
        <h2 class="text-center mb-5" style="font-family: 'Poppins', sans-serif; font-size: 2.5rem; color: #333;">Events Reservation</h2>
        <div class="row g-4">
            <!-- Coffee Shop Reservation -->
            <div class="col-12">
                <div class="d-flex flex-wrap bg-white rounded-3 shadow-lg p-4">
                    <div class="col-md-6">
                        <img src="{{ asset('images/reservetable.jpg') }}" alt="Coffee Shop" style="height: 300px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center px-4">
                        <h3 class="fw-bold" style="font-size: 1.8rem; color: #444;">Reserve Coffee Shop</h3>
                        <p style="color: #666; line-height: 1.8; font-size: 1rem;">Plan your next big event at our coffee shop or enjoy a cozy table for two. Flexible reservations tailored to your needs!</p>
                        <div class="d-flex gap-3 mt-3">
                            <button class="btn btn-primary px-4 py-2" style="font-size: 1rem;" data-bs-toggle="modal" data-bs-target="#reserveTableModal">Reserve Table</button>
                            <button class="btn btn-info px-4 py-2" style=" font-size: 1rem;" data-bs-toggle="modal" data-bs-target="#reserveCoffeeModal">Reserve Coffee Place</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Study Room Reservation -->
            <div class="col-12">
                <div class="d-flex flex-wrap bg-white rounded-3 shadow-lg p-4">
                    <div class="col-md-6">
                        <img src="{{ asset('images/reservestudy.webp') }}" alt="Study Room" style="height: 300px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center px-4">
                        <h3 class="fw-bold" style="font-size: 1.8rem; color: #444;">Reserve Study Room</h3>
                        <p style="color: #666; line-height: 1.8; font-size: 1rem;">Need a quiet place for studying or collaborating? Book one of our private study rooms today.</p>
                        <button class="btn btn-primary px-4 py-2 mt-3" style=" font-size: 1rem;" data-bs-toggle="modal" data-bs-target="#reserveStudyModal">Reserve Study Room</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Reserve Table -->
<div class="modal fade" id="reserveTableModal" tabindex="-1" aria-labelledby="reserveTableModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('{{ asset('images/reserve2.jpg') }}'); background-size: cover; background-position: center; filter: brightness(30%); z-index: 1;"></div>
            <div class="modal-header" style="z-index: 2; position: relative;">
                <h5 class="modal-title" id="reserveTableModalLabel" style="color: #fff;">Reserve Table</h5>
                <button type="button" class="btn-close custom-close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="reserveTableForm" action="{{ url('zones') }}" method="POST">
                @csrf
                <div class="modal-body text-white position-relative" style="z-index: 2;">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="capacity" class="col-sm-4 col-form-label">Capacity</label>
                        <div class="col-sm-8">
                            <input type="number" name="capacity" class="form-control" placeholder="Enter number of people" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="reserve_time" class="col-sm-4 col-form-label">Time</label>
                        <div class="col-sm-8">
                            <input type="time" name="reserve_time" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="reservation_date" class="col-sm-4 col-form-label">Date</label>
                        <div class="col-sm-8">
                            <input type="date" name="reservation_date" class="form-control" required>
                        </div>
                    </div>
                    <input type="hidden" name="zone_id" value="3"> <!-- Table Zone ID -->
                </div>
                <div class="modal-footer justify-content-center" style="z-index: 2; position: relative;">
                    <button type="submit" class="btn btn-warning px-4 py-2" style="border-radius: 10px;">Reserve</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal for Reserve Coffee Place -->
<div class="modal fade" id="reserveCoffeeModal" tabindex="-1" aria-labelledby="reserveCoffeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('{{ asset('images/reserve1.jpg') }}'); background-size: cover; background-position: center; filter: brightness(30%); z-index: 1;"></div>
            <div class="modal-header" style="z-index: 2; position: relative;">
                <h5 class="modal-title" id="reserveCoffeeModalLabel" style="color: #fff;">Reserve Coffee Place</h5>
                <button type="button" class="btn-close custom-close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="reserveCoffeeForm" action="{{ url('zones') }}" method="POST">
                @csrf
                <div class="modal-body text-white position-relative" style="z-index: 2;">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="capacity" class="col-sm-4 col-form-label">Capacity</label>
                        <div class="col-sm-8">
                            <input type="number" name="capacity" class="form-control" placeholder="Enter number of people" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="time" class="col-sm-4 col-form-label">Time</label>
                        <div class="col-sm-8">
                            <input type="time" name="time" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="date" class="col-sm-4 col-form-label">Date</label>
                        <div class="col-sm-8">
                            <input type="date" name="date" class="form-control" required>
                        </div>
                    </div>
                    <input type="hidden" name="zone_id" value="4"> <!-- Coffee Place Zone ID -->
                </div>
                <div class="modal-footer justify-content-center" style="z-index: 2; position: relative;">
                    <button type="submit" class="btn btn-warning px-4 py-2" style="border-radius: 10px;">Reserve</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal for Reserve Study Room -->
<div class="modal fade" id="reserveStudyModal" tabindex="-1" aria-labelledby="reserveStudyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('{{ asset('images/reserve3.webp') }}'); background-size: cover; background-position: center; filter: brightness(30%); z-index: 1;"></div>
            <div class="modal-header" style="z-index: 2; position: relative;">
                <h5 class="modal-title" id="reserveStudyModalLabel" style="color: #fff;">Reserve Study Room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="reserveStudyForm" action="{{ url('zones') }}" method="POST">
                @csrf
                <div class="modal-body text-white position-relative" style="z-index: 2;">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="capacity" class="col-sm-4 col-form-label">Capacity</label>
                        <div class="col-sm-8">
                            <input type="number" name="capacity" class="form-control" placeholder="Enter number of people" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="time" class="col-sm-4 col-form-label">Time</label>
                        <div class="col-sm-8">
                            <input type="time" name="time" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="date" class="col-sm-4 col-form-label">Date</label>
                        <div class="col-sm-8">
                            <input type="date" name="date" class="form-control" required>
                        </div>
                    </div>
                    <input type="hidden" name="zone_id" value="2"> <!-- Study Room Zone ID -->
                </div>
                <div class="modal-footer justify-content-center" style="z-index: 2; position: relative;">
                    <button type="submit" class="btn btn-warning px-4 py-2" style="border-radius: 10px;">Reserve</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- AJAX script to handle form submission -->
<script>
$(document).ready(function() {
    $('#reserveTableForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function(response) {
                alert('Table reserved successfully!');
                $('#reserveTableModal').modal('hide');
            },
            error: function(xhr, status, error) {
                alert('There was an error with the reservation!');
            }
        });
    });

    $('#reserveCoffeeForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function(response) {
                alert('Coffee place reserved successfully!');
                $('#reserveCoffeeModal').modal('hide');
            },
            error: function(xhr, status, error) {
                alert('There was an error with the reservation!');
            }
        });
    });

    $('#reserveStudyForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function(response) {
                alert('Study room reserved successfully!');
                $('#reserveStudyModal').modal('hide');
            },
            error: function(xhr, status, error) {
                alert('There was an error with the reservation!');
            }
        });
    });
});
</script>

@endsection
