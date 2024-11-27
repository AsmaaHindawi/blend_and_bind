@extends('layouts.app')

@section('title', 'Blend & Bind')

@section('content')
<style>
/* General Section Styling */
section {
    padding: 2rem 1rem; /* Consistent padding for all sections */
}


/* Ensuring card images maintain aspect ratio */
.card-img-top {
    object-fit: cover;
    aspect-ratio: 16/9; /* Keeps consistent aspect ratio */
    width: 100%;
    border-radius: 10px 10px 0 0;
}

/* Card styling */
.card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

/* Card body styling */
.card-body {
    padding: 15px;
    background-color: #f8f9fa;
    border-radius: 0 0 15px 15px;
}

/* Card title and text styling */
.card-title {
    font-size: 1.125rem;
    font-weight: bold;
    margin-bottom: 10px;
    color: #343a40;
}

.card-text {
    color: #6c757d;
    font-size: 0.875rem;
}

/* Button styling */
.card .btn {
    background-color: #007bff;
    color: white;
    font-weight: bold;
    border-radius: 25px;
    padding: 8px 18px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.card .btn:hover {
    background-color: #0056b3;
    transform: scale(1.05);
}

/* Filters menu styling */
.filters_menu {
    list-style: none;
    padding: 0;
    margin: 20px 0;
    display: flex;
    justify-content: center;
    gap: 10px; /* Add space between buttons */
    flex-wrap: wrap; /* Ensures wrapping on smaller screens */
}

.filters_menu li {
    font-size: 16px;
    cursor: pointer;
    padding: 8px 15px;
    border: 1px solid #ddd;
    border-radius: 20px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.filters_menu li.active,
.filters_menu li:hover {
    background-color: #FFD700;
    color: #000;

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
</style>

<!-- Hero Section
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(images/bg_1p.png);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Games Zones</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Games</span></p>
                </div>
            </div>
        </div>
    </div>
</section>-->

<div class="container-fluid px-0">
    <!-- Header Section -->
    <div class="header-banner position-relative">
        <img src="{{ asset('images/photo-1511512578047-dfb367046420.jpeg') }}" alt="Menu Header" class="w-100">
        <div class="header-overlay text-center">
            <h1 class="header-title mt-5">Our Games Zone</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Games</span></p>
        </div>
    </div>

</div>


<!-- Introduction Section -->
<section class="ftco-about d-md-flex position-relative" style=" background-color:aliceblue; ">
    <!-- Left Image Section -->
    <div class="one-half img position-relative" style="background-image: url('{{ asset('images/gamezone.jpg') }}'); background-size: cover; background-position: center;">
        <div class="overlay" style="background: rgba(0, 0, 0, 0.4); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
    </div>

    <!-- Right Text Section -->
    <div class="one-half d-flex align-items-center position-relative" style="z-index: 2;">
        <div class="container py-5">
            <div class="overlap p-5 shadow-lg" style="background: rgba(255, 255, 255, 0.9); border-radius: 15px; transform: translateY(-50px);">
                <span class="subheading text-uppercase font-weight-bold" style="color:#FFD700; font-size: 18px; letter-spacing: 1.5px;">Games Zone</span>
                <h2 class="mb-4" style="font-family: 'Dancing Script', cursive; font-size: 42px; color: #333; line-height: 1.3;">
                    Let the Fun Begin
                </h2>
                <p style="font-size: 18px; color: #666; line-height: 1.8;">
                    Unwind with an exceptional collection of games tailored for every taste. Whether you're a strategist, adventurer, or thrill-seeker, our cozy coffee shop offers the perfect blend of relaxation and excitement. Join us to sip, play, and connect!
                </p>
                <a href="#games" class="btn px-5 py-3 text-white font-weight-bold" style="background:#0056b3; border-radius: 30px; color:#000;">Explore the Fun</a>
            </div>
        </div>
    </div>
</section>


<!-- Games Section -->
<div class="container mt-5">
    <h2 class="text-center mb-5" style="font-family: 'Dancing Script', cursive; font-size: 48px; color: black;">Explore Our Games</h2>

    <!-- Filters Menu -->
    <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter="board">Board</li>
        <li data-filter="card">Card</li>
        <li data-filter="video">Video</li>
    </ul>

    <!-- Games List -->
    <div class="row grid">
        @foreach($games as $game)
            @php
                $filterClass = strtolower($game->type); // Convert game type to lowercase for consistent class naming
            @endphp
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 all {{ $filterClass }}">
                <div class="card">
                    <img src="{{ asset('images/' . $game->image) }}" class="card-img-top" alt="{{ $game->name }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $game->name }}</h5>
                        <p class="card-text">Type: {{ $game->type }}</p>
                        <p class="card-text">Players: {{ $game->min_players }} - {{ $game->max_players }}</p>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.filters_menu li').forEach(filter => {
            filter.addEventListener('click', function () {
                // Remove active class from all filters
                document.querySelectorAll('.filters_menu li').forEach(el => el.classList.remove('active'));

                // Add active class to clicked filter
                this.classList.add('active');

                // Get the filter value
                const filterValue = this.getAttribute('data-filter');

                // Show/hide items based on filter
                document.querySelectorAll('.grid .all').forEach(item => {
                    if (filterValue === '*' || item.classList.contains(filterValue)) {
                        item.style.display = 'block'; // Show matching items
                    } else {
                        item.style.display = 'none'; // Hide non-matching items
                    }
                });
            });
        });
    });
</script>
@endpush

@endsection
