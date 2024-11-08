@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-indigo-100 flex items-center justify-center py-20">
    <div class="bg-white w-full max-w-md mx-auto p-8 rounded-lg shadow-lg">
        <h2 class="text-4xl font-bold text-center mb-4 text-gray-800">Contact Us</h2>
        <p class="text-center text-gray-600 mb-4">
            Have any questions or suggestions? Drop us a message!
        </p>
        <form action="{{ route('contact') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700">Your Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your name" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700">Your Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-semibold text-gray-700">Message</label>
                <textarea name="message" id="message" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your message here" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="w-full py-2 px-4 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-600 transition duration-200">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
