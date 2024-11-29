@extends('layouts.app')

@section('title', 'Blend & Bind')

@section('content')

<div class="container-fluid px-0">
    <!-- Header Section -->
    <div class="header-banner position-relative">
        <img src="{{ asset('images/image1.jpg') }}" alt="Menu Header" class="w-100">
        <div class="header-overlay text-center">
            <h1 class="header-title mt-5">Contact Us</h1>
            <p class="breadcrumbs">
                <span class="mr-2">
                    <a href="{{ route('home') }}">Home</a>
                </span>
                <span>Menu</span>
            </p>
        </div>
    </div>

</div>

<style>
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
    margin-bottom: 12px;
    color: white;
}
 /* 2px solid rgba(255, 255, 255, 0.1) */

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
</style>
<section class="ftco-section contact-section contact-page" style="background: url(images/istockphoto-1255807969-612x612.png); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; background-color: rgba(0, 0, 0, 0.5);">
    <div class="container mt-5">
        <div class="row block-9">
            <div class="col-md-4 contact-info ftco-animate">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h1 class="h1">Contact Information</h1>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Phone:</span> <a href="tel://+96176689085">+961 76 689 085</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Website:</span> <a href="{{ route('home') }}">BlendnBind.com</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">blendnbind@gmail.com</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Address:</span> <a href="https://maps.app.goo.gl/oMpxBaeTHZsthyjm7">Bliss Street, Hamra Beirut</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                    @csrf <!-- CSRF Protection -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                        @error('subject')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        @error('message')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
