<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blend and Bind - Where Stories and Flavors Meet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navigation -->
    <nav class="bg-white p-5 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-indigo-800 text-2xl font-semibold flex items-center">
                <img src="{{ asset('images/BlendnBind.png') }}" alt="Blend & Bind Logo" class="w-18 h-16 mr-2">
            </a>
            <div class="flex space-x-6">
                <a href="/" class="text-gray-800 hover:text-blue-900">Home</a>
                <a href="/about" class="text-gray-800 hover:text-blue-900">About</a>
                <a href="/shop" class="text-gray-800 hover:text-blue-900">Services</a>
                <a href="/events" class="text-gray-800 hover:text-blue-900">Events</a>
                <a href="/shop" class="text-gray-800 hover:text-blue-900">Add to Card</a>
                <a href="/contact" class="text-gray-800 hover:text-blue-900">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="h-screen bg-cover bg-center flex items-center justify-center text-center relative" style="background-image: url('http://localhost/blend_and_bind/public/images/background1.jpg');">
        <div class="bg-white bg-opacity-70 absolute inset-0"></div>
        <div class="relative z-10">
            <h1 class="text-6xl font-bold text-gray-900 mb-4">It's Nice to Meet You</h1>
            <p class="text-2xl text-gray-800 mb-8">Welcome to Our Blend of Books and Coffee!</p>
            <a href="#about" class="inline-block px-8 py-4 bg-yellow-500 text-gray-900 font-semibold rounded-lg hover:bg-yellow-600 transition">Tell Me More</a>
        </div>
    </header>

    <!-- Services Section -->
    <section class="py-20 bg-gray-100 text-gray-800">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-12">Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <span class="bg-blue-900 rounded-full p-5">
                            <i class="fas fa-shopping-cart text-4xl text-white"></i>
                        </span>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Books</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <span class="bg-blue-900 rounded-full p-5">
                            <i class="fas fa-desktop text-4xl text-white"></i>
                        </span>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Study Zones</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <span class="bg-blue-900 rounded-full p-5">
                            <i class="fas fa-lock text-4xl text-white"></i>
                        </span>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Games</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-20 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-12">Menu</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('images/portfolio1.jpg') }}" alt="Project 1" class="w-full">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Coffee</h3>
                        <p>All Kinds of Coffee</p>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('images/portfolio2.jpg') }}" alt="Project 2" class="w-full">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Sweets</h3>
                        <p>American Sweets</p>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('images/portfolio3.jpg') }}" alt="Project 3" class="w-full">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Snacks</h3>
                        <p>Lebanese Snacks</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white text-gray-800">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">About Us</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="{{ asset('images/about/about-image.jpg') }}" alt="About Image" class="rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h3 class="text-3xl font-semibold mb-6">Our Humble Beginnings</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, recusandae. Sunt ut voluptatem eius sapiente, totam reiciendis tempora!</p>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Footer Section -->
<footer class="py-20 bg-blue-950 text-white flex">
    <div class="container mx-auto">
    
         <img src="{{ asset('images\BlendBinds.png') }}" alt="Blend & Bind slogan" class="bg-white  rounded-lg w-20 h-16 mr-2">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            <!-- First Column: Site Links -->
            <div class="footerCol">
                <h4 class="text-2xl font-semibold mb-4 pb-2 border-b-2 border-yellow-400 inline-block">Blend & Bind</h4>
                <ul>
                    <li class="mb-2"><a class="text-white hover:text-yellow-400" href="{{ route('home') }}">Home</a></li>
                    <li class="mb-2"><a class="text-white hover:text-yellow-400" href="{{ route('about') }}">About</a></li>
                    <li class="mb-2"><a class="text-white hover:text-yellow-400" href="{{ route('events') }}">Events</a></li>
                    <li class="mb-2"><a class="text-white hover:text-yellow-400" href="{{ route('services') }}">Services</a></li>
                    <li class="mb-2"><a class="text-white hover:text-yellow-400" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <!-- Second Column: Get Help -->
            <div class="footerCol">
                <h4 class="text-2xl font-semibold mb-4 pb-2 border-b-2 border-yellow-400 inline-block">Get Help</h4>
                <ul>
                    <li class="mb-2"><a class="text-white hover:text-yellow-400" href="#">FAQ</a></li>
                    <li class="mb-2"><a class="text-white hover:text-yellow-400" href="#">Reservation Status</a></li>
                    <li class="mb-2"><a class="text-white hover:text-yellow-400" href="#">Payment Options</a></li>
                </ul>
            </div>
            <!-- Third Column: Follow Us -->
            <div class="footerCol">
                <h4 class="text-2xl font-semibold mb-4 pb-2 border-b-2 border-yellow-400 inline-block">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/" target="_blank" class="text-yellow-400 hover:text-white">
                        <i class="fab fa-facebook-f text-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="text-yellow-400 hover:text-white">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="text-yellow-400 hover:text-white">
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                    <a href="https://www.youtube.com/" target="_blank" class="text-yellow-400 hover:text-white">
                        <i class="fab fa-youtube text-2xl"></i>
                    </a>
                </div>
            </div>
            <!-- Fourth Column: Contact Button -->
            <div class="footerCol flex justify-center items-center">
                <a href="{{ route('contact') }}" class="inline-block px-8 py-4 bg-yellow-500 text-gray-900 font-semibold rounded-lg hover:bg-yellow-600 transition duration-200">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>