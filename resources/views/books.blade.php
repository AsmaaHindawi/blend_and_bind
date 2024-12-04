@extends('layouts.app')

@section('title', 'Books')

@section('content')
<div class="container-fluid px-0">
    <!-- Header Section -->
    <div class="header-banner position-relative">
        <img src="{{ asset('book_images/header.jpg') }}" alt="Books Header" class="w-100">
        <div class="header-overlay text-center">
            <h1 class="header-title">Our Books</h1>
            <p class="breadcrumbs">
                <span class="mr-2">
                    <a href="{{ route('home') }}">Home</a>
                </span>
                <span>Books</span>
            </p>
            <form method="GET" action="{{ route('books') }}" class="search-form">
                <div class="input-group search-container">
                    <input type="text" name="search" class="form-control search-bar" placeholder="Search books by title, genre, or author" value="{{ request('search') }}">
                    <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container my-5">
    <!-- Top Authors -->
    <div class="row mb-5">
        <div class="col-12 text-center position-relative">
            <div class="section-title d-flex align-items-center justify-content-center">
                <div class="line-decoration-author"></div>
                <h3 class="mx-3">Top Authors</h3>
                <div class="line-decoration-author"></div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <!-- All Button -->
        <div class="col-md-2 text-center">
            <a href="{{ route('books') }}" class="filter-circle-blue {{ request('filter') === null ? 'active' : '' }}">
                <span>All</span>
            </a>
        </div>
        @foreach ($topAuthors as $author)
            <div class="col-md-2 text-center">
                <a href="{{ route('books', ['filter' => 'author', 'value' => $author]) }}"
                   class="filter-circle-blue {{ request('filter') === 'author' && request('value') === $author ? 'active' : '' }}">
                    <span>{{ $author }}</span>
                </a>
            </div>
        @endforeach
    </div>

    <!-- Top Genres -->
    <div class="row mb-5">
        <div class="col-12 text-center position-relative">
            <div class="section-title d-flex align-items-center justify-content-center">
                <div class="line-decoration"></div>
                <h3 class="mx-3">Top Genres</h3>
                <div class="line-decoration"></div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <!-- All Button -->
        <div class="col-md-2 text-center">
            <a href="{{ route('books') }}" class="filter-circle-yellow {{ request('filter') === null ? 'active' : '' }}">
                <span>All</span>
            </a>
        </div>
        @foreach ($topGenres as $genre)
            <div class="col-md-2 text-center">
                <a href="{{ route('books', ['filter' => 'genre', 'value' => $genre]) }}"
                   class="filter-circle-yellow {{ request('filter') === 'genre' && request('value') === $genre ? 'active' : '' }}">
                    <span>{{ $genre }}</span>
                </a>
            </div>
        @endforeach
    </div>

    <!-- All Books -->
    <div class="row mb-5">
        <div class="col-12 text-center position-relative">
            <div class="section-title d-flex align-items-center justify-content-center">
                <div class="line-decoration"></div>
                <h3 class="mx-3">All Books</h3>
                <div class="line-decoration"></div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($books as $book)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="book-card rounded">
                    <div class="book-image">
                        <img src="{{ asset('book_images/' . $book->image) }}" alt="{{ $book->title }}">
                    </div>
                    <div class="book-body p-3">
                        <h5 class="book-title">{{ $book->title }}</h5>
                        <p class="book-author text-muted">By {{ $book->author }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="menu-card-price">${{ number_format($book->price, 2) }}</h6>
                            <form action="{{ route('cart.add', ['id' => $book->book_id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="type" value="book">
                                <button type="submit" class="btn btn-warning btn-circle">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </form>
                        </div>
                        <div class="mt-3">
                            <form action="{{ route('books.favorite', ['id' => $book->book_id]) }}" method="POST" class="favorite-form">
                                @csrf
                                <button type="submit" class="btn btn-sm {{ in_array($book->book_id, $favorites) ? 'btn-danger' : 'btn-outline-secondary' }}">
                                    <i class="fas fa-heart"></i>
                                    {{ in_array($book->book_id, $favorites) ? 'Unfavorite' : 'Favorite' }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
@push('styles')
<style>

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
        margin-top: 65px;
        font-family: 'Dancing Script', cursive;
        font-size: 48px;
        font-weight: bold;
        margin-bottom: 7px;
        color: white;
    }

    .line-decoration {
        height: 2px;
        background-color: #FFD700; /* Yellow Line */
        flex: 1;
        max-width: 100px;
    }

    .line-decoration-author {
        height: 2px;
        background-color: #4476ac; /* Blue Line */
        flex: 1;
        max-width: 100px;
    }
    .search-container {
        padding-right: 180px;
        width: 200%;
        max-width: 600px;
    }

    /* Search Bar */
    .search-bar {
        background-color: white !important;
        color: black !important;
        border: 1px solid black !important;
        padding: 10px;
        font-size: 14px;
        border-radius: 4px;
    }

    .search-bar:focus {
        border-color: #ffcc00 !important;
        box-shadow: 0 0 5px rgba(255, 204, 0, 0.5);
    }

    .search-bar::placeholder {
        color: #aaa !important;
    }

    .input-group .btn-warning {
        background-color: #ffcc00 !important;
        color: black !important;
        border: none !important;
        transition: all 0.3s ease;
    }

    .input-group .btn-warning:hover {
        background-color: #e0b800 !important;
        color: white !important;
    }

    /* Filters */
    .filter-circle-blue,
    .filter-circle-yellow {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100px;
        height: 100px;
        margin: auto;
        border-radius: 50%;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    }

    .filter-circle-blue {
        background-color: #fff;
        border: 2px solid #4476ac;
        color: black;
    }

    .filter-circle-yellow {
        background-color: #fff;
        border: 2px solid #FFD700;
        color: black;
    }

    .filter-circle-blue:hover,
    .filter-circle-blue.active {
        background-color: #4476ac;
        color: black;
    }

    .filter-circle-yellow:hover,
    .filter-circle-yellow.active {
        background-color: #FFD700;
        color: black;
    }

    /* Book Card */
    .book-card {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .book-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .book-image img {
        width: 100%;
        height: 200px; /* Ensure uniform height for all book cards */
        object-fit: contain;
        border-bottom: 2px solid #4476ac;
    }

    .book-title {
        font-size: 16px;
        font-weight: bold;
    }

    .book-author {
        font-size: 14px;
        margin-bottom: 5px;
    }

    .menu-card-price {
        font-size: 16px;
        font-weight: bold;
        color: #FFD700;
    }

    .btn-circle {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #FFD700;
        color: #000;
        border: none;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-circle:hover {
        background-color: #FFA500;
        color: #fff;
    }
</style>
@endpush
