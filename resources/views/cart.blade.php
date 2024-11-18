@extends('layouts.app')

@section('title', 'Blend & Bind')

@section('content')

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(images/bg_1p.png);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">
  
          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Add to Cart</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>shop</span></p>
          </div>
  
        </div>
      </div>
    </div>
  </section>


@endsection