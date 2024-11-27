@extends('layouts.app')

@section('title', 'Blend & Bind')
@section('content')
<section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url(images/bg_1p.png);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread" id="form-title">Admin Page</h1>
                        <p class="breadcrumbs">
                            <span class="mr-2"><a href="{{ route('home') }}">Home</a></span>
                            <span id="form-title-breadcrumb">Admin</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Contact Table -->
 <table>
        <caption>Contact</caption>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>Feedback</td>
                <td>Great service!</td>
            </tr>
        </tbody>
    </table>

    <!-- Books Table -->
    <table>
        <caption>Books</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Jane Austen</td>
                <td>Pride and Prejudice</td>
                <td>Fiction</td>
                <td>$15</td>
            </tr>
        </tbody>
    </table>

    <!-- Menu Table -->
    <table>
        <caption>Menu</caption>
        <thead>
            <tr>
                <th>Menu Item</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Espresso</td>
                <td>$3</td>
            </tr>
        </tbody>
    </table>

    <!-- Reservation Table -->
    <table>
        <caption>Reservation</caption>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Capacity</th>
                <th>Time</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Anna Smith</td>
                <td>anna@example.com</td>
                <td>4</td>
                <td>7:00 PM</td>
                <td>2024-11-30</td>
            </tr>
        </tbody>
    </table>
 <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

caption {
    font-size: 1.2em;
    margin-bottom: 10px;
    font-weight: bold;
}
    </style> 


    @endsection