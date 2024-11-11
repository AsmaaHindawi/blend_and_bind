@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="d-flex align-items-center justify-content-center text-center bg-dark text-white" style="height: 100vh; background: url('images/background1.jpg') no-repeat center center/cover;">
    <div class="bg-dark p-5 rounded opacity-75">
        <h1 class="display-4 fw-bold mb-3">Blend and Bind</h1>
        <p class="lead mb-4">Where Stories and Flavors Meet</p>
        <a href="#shop" class="btn btn-warning text-dark fw-bold">Discover Our Blends</a>
    </div>
</div>

<!-- About Us Section -->
<section class="py-5">
    <div class="container px-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="display-5 fw-bold text-dark mb-3">Our Story</h2>
                <p class="text-muted mb-4">At Blend and Bind, we believe in bringing together the aroma of freshly brewed coffee with the love of reading. Our cozy spaces are designed for readers, thinkers, and lovers of fine coffee alike. The experience here is more than just flavors; it is about the community, the ambiance, and the books that tell stories and inspire creativity.</p>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <img src="{{ asset('images/about/about-image.jpg') }}" alt="About Blend and Bind" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="display-6 fw-bold text-center mb-5">Featured Products</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('images/products/coffee.jpg') }}" alt="Coffee Beans" class="card-img-top">
                    <div class="card-body">
                        <h3 class="h5 fw-bold">Coffee Beans</h3>
                        <p class="text-muted">Rich and aromatic beans perfect for your daily brew.</p>
                    </div>
                </div>
            </div>
            <!-- Repeat similar product cards for other products -->
        </div>
    </div>
</section>

@endsection
