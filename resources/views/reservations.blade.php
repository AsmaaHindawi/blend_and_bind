@extends('layouts.app')

@section('title', 'Blend & Bind - Reservations')

@section('content')

<style>
    /* General Section Styling */
    section {
        padding: 2rem 1rem;
    }

    /* Header Section Styling */
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
 /* Style for the Breadcrumbs */
 .breadcrumbs {
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 1px;
    color: #bfbfbf; /* Default breadcrumb text color */
}

.breadcrumbs span {
    border-bottom: 2px solid rgba(255, 255, 255, 0.1);
    color: #bfbfbf; /* Span text color */
}

.breadcrumbs span a {
    border-bottom: 2px solid rgba(255, 255, 255, 0.1);
    color: #ffffff; /* Link color specifically for "Home" */
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumbs span a:hover {
    color: #edca1b; /* Darker color when hovered */
}

    /* Zone Card Styling */
    .zone-card {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: auto;
    }

    .zone-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
    }

    .zone-image-container img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-bottom: 3px solid #437eb5;
        transition: transform 0.3s ease;
    }

    .zone-card:hover .zone-image-container img {
        transform: scale(1.05);
    }

    /* Zone Info Styling */
    .zone-info {
        padding: 20px;
        text-align: center;
        flex-grow: 1;
        /* color: rgba(255, 255, 255, 0.9) !important; */
    }

    .zone-info h3 {
        font-size: 1.5rem;
        color: #437eb5;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .zone-info p {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
    }

    /* Reservation Section Styling */
    #events-reservation {
        background-color: #f0f4f8;
        padding-bottom: 3rem;
    }

    .reservation-container {
        background-color: #fff;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
        padding: 1.5rem;
    }

    .reservation-container img {
        border-radius: 10px;
        height: 300px;
        object-fit: cover;
        width: 100%;
    }

    .reservation-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 1rem;
    }

    .reservation-info h3 {
        font-weight: bold;
        font-size: 1.8rem;
        color: #444;
    }

    .reservation-info p {
        color: #666;
        line-height: 1.8;
        font-size: 1rem;
    }

    .reservation-info button {
        margin-top: 1.5rem;
        font-size: 1rem;
    }

    /* Modal Styling */
    .modal-body {
        padding: 15px;
    }

    .modal-content {
        position: relative;
    }

    .modal-header {
        z-index: 2;
        position: relative;
    }

    #reservationModal .modal-content .position-absolute {
        border-radius: 0.5rem;
        z-index: 0;
    }
</style>

<!-- Header Section -->
<div class="container-fluid px-0">
    <div class="header-banner position-relative">
        <img src="{{ asset('images/ouvrir-un-coffee-shop-etapes.jpg') }}" alt="Zone Header" class="w-100">
        <div class="header-overlay text-center">
            <h1 class="header-title mt-5">Our Zones</h1>
            <p class="breadcrumbs">
                <span class="mr-2">
                    <a href="{{ route('home') }}">Home</a>
                </span>
                <span>Zones</span>
            </p>
        </div>
    </div>
</div>

<!-- Section 1: Coffee Shop Zones -->
<section id="our-zones" class="container mt-5 py-5">
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
                        <p>Step into our Coffee Place, a cozy haven for savoring premium brews, connecting with friends, and finding inspiration in a relaxing ambiance.</p>
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
                        <p>Experience ultimate focus and collaboration in our well-equipped Study Rooms, designed for productive studying and group projects.</p>
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
                        <p>Dive into endless fun and friendly competition in our Games Room, packed with the latest consoles, board games, and interactive. </p>
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
                        <p>
                            Explore endless knowledge and creativity in our serene Library, a tranquil haven for reading, research, and inspiration.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reservation Section -->
{{-- <div id="events-reservation" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" style="font-size: 3rem;">Events Reservation</h2>
        <div class="row g-4">
            <div class="col-12">
                <div class="reservation-container">
                    <div class="col-md-6">
                        <img src="{{ asset('images/reservetable.jpg') }}" alt="Coffee Shop">
                    </div>
                    <div class="col-md-6 reservation-info">
                        <h3>Reserve Coffee Shop</h3>
                        <p>Plan your next big event at our coffee shop or enjoy a cozy table for two. Flexible reservations tailored to your needs!</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">Reserve Table</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Modal -->
<div id="events-reservation" class="py-5" style="background-color: #f0f4f8; width: 100%; margin-bottom: 50px;">
    <div class="container">
        <h2 class="text-center mb-5" style= "font-size: 3rem;">Events Reservation</h2>
        <div class="row g-4">
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
        </div>
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
