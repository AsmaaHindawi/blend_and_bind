@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-cover bg-center h-screen flex items-center justify-center text-center">
  <div class="bg-black bg-opacity-50 p-10 rounded-lg">
    <h1 class="text-white text-5xl font-bold mb-4">Blend and Bind</h1>
    <p class="text-white text-2xl mb-8">Where Stories and Flavors Meet</p>
    <a href="#shop" class="px-6 py-3 bg-yellow-500 text-black rounded-lg hover:bg-yellow-600">Discover Our Blends</a>
  </div>
</div>

<!-- About Us Section -->
<section class="py-16">
  <div class="container mx-auto px-6">
    <div class="flex flex-col md:flex-row items-center justify-between">
      <div class="w-full md:w-1/2">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Story</h2>
        <p class="text-gray-600 mb-6">At Blend and Bind, we believe in bringing together the aroma of freshly brewed coffee with the love of reading. Our cozy spaces are designed for readers, thinkers, and lovers of fine coffee alike. The experience here is more than just flavors; it is about the community, the ambiance, and the books that tell stories and inspire creativity.</p>
      </div>
      <div class="w-full md:w-1/2 mt-6 md:mt-0">
        <img src="{{ asset('images/about/about-image.jpg') }}" alt="About Blend and Bind" class="rounded-lg shadow-lg">
      </div>
    </div>
  </div>
</section>

<!-- Featured Products -->
<section class="py-20 bg-gray-100">
  <div class="container mx-auto">
    <h2 class="text-3xl font-bold text-center mb-8">Featured Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white shadow-lg rounded-lg p-6">
        <img src="{{ asset('images/products/coffee.jpg') }}" alt="Coffee Beans" class="w-full h-64 object-cover rounded">
        <h3 class="text-lg font-semibold mt-4">Coffee Beans</h3>
        <p class="text-gray-600">Rich and aromatic beans perfect for your daily brew.</p>
      </div>
      <!-- Repeat for other products -->
    </div>
  </div>
</section>
@endsection
