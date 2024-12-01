@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="header-banner position-relative">
        <img src="{{ asset('images/image1.jpg') }}" alt="Dashboard Header" class="w-100">
        <div class="header-overlay text-center">
            <h1 class="header-title">Admin Dashboard</h1>
            <p class="breadcrumbs">
                <span class="mr-2">
                    <a href="{{ route('home') }}">Home</a>
                </span>
                <span>Dashboard</span>
            </p>
        </div>
    </div>

    <div class="container mt-4">
        <!-- Cards Section -->
        <div class="row mb-4">
            <!-- Users Card -->
            <div class="col-md-3">
                <div class="custom-card shadow text-center">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text">{{ $userCount ?? '0' }}</p>
                    </div>
                </div>
            </div>

            <!-- Admins Card -->
            <div class="col-md-3">
                <div class="custom-card shadow text-center">
                    <div class="card-body">
                        <h5 class="card-title">Admins</h5>
                        <form action="{{ route('admin.admins.update') }}" method="POST">
                            @csrf
                            <input type="number" name="adminCount" value="{{ $adminCount ?? '0' }}" min="1"
                                class="form-control custom-input">
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Books Card -->
            <div class="col-md-3">
                <div class="custom-card shadow text-center">
                    <div class="card-body">
                        <h5 class="card-title">Books</h5>
                        <form action="{{ route('admin.books.update') }}" method="POST">
                            @csrf
                            <input type="number" name="bookSales" value="{{ $bookCount ?? '0' }}" min="0"
                                class="form-control custom-input">
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Menu Items Card -->
            <div class="col-md-3">
                <div class="custom-card shadow text-center">
                    <div class="card-body">
                        <h5 class="card-title">Menu Items</h5>
                        <form action="{{ route('admin.menus.update') }}" method="POST">
                            @csrf
                            <input type="number" name="menuSales" value="{{ $menuCount ?? '0' }}" min="0"
                                class="form-control custom-input">
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart Section -->
        <div class="row mb-4">
            <div class="col-md-6 offset-md-3">
                <div class="custom-chart-card shadow">
                    <div class="card-header bg-dark text-white text-center">
                        <h5 class="card-title">Website Statistics</h5>
                    </div>
                    <div class="card-body text-center">
                        <canvas id="statisticsPieChart"></canvas>
                        <div class="mt-4 text-center">
                            <div><span class="legend-box" style="background-color: #36A2EB; align-items: flex-start; display: flex;"></span> Users</div>
                            <div><span class="legend-box" style="background-color: #FFCE56; align-items: flex-start; display: flex;"></span> Admins</div>
                            <div><span class="legend-box" style="background-color: #FF6384; align-items: flex-start; display: flex;"></span> Books</div>
                            <div><span class="legend-box" style="background-color: #4BC0C0; align-items: flex-start; display: flex;"></span> Menu Items</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Monthly Sales Chart -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="custom-chart-card shadow">
                    <div class="card-header bg-dark text-white">
                        <h5 class="card-title mb-0">Monthly Recap Report</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="monthlySalesChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @push('scripts')
        <script>
            // Monthly Sales Bar Chart
            const monthlySalesCtx = document.getElementById('monthlySalesChart').getContext('2d');
            new Chart(monthlySalesCtx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May'], // Static months
                    datasets: [{
                        label: 'Sales',
                        data: [500, 700, 800, 600, 750], // Static data
                        backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545', '#6c757d'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        }
                    }
                }
            });

            // Pie Chart for Website Statistics
            const statisticsCtx = document.getElementById('statisticsPieChart').getContext('2d');
            new Chart(statisticsCtx, {
                type: 'pie',
                data: {
                    labels: ['Users', 'Admins', 'Books', 'Menu Items'],
                    datasets: [{
                        data: [
                            {{ $userCount ?? 0 }},
                            {{ $adminCount ?? 0 }},
                            {{ $bookCount ?? 0 }},
                            {{ $menuCount ?? 0 }}
                        ],
                        backgroundColor: [
                            '#36A2EB', // Blue for Users
                            '#FFCE56', // Yellow for Admins
                            '#FF6384', // Red for Books
                            '#4BC0C0' // Teal for Menu Items
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        </script>
    @endpush
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
        margin-top: 35px;
        margin-bottom: 12px;
        color: white;
    }
    /* 2px solid rgba(255, 255, 255, 0.1) */

    /* Style for the Breadcrumbs */
    .breadcrumbs {
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 1px;
        color: #bfbfbf;
        /* Default breadcrumb text color */
    }

    .breadcrumbs span {
        border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        color: #bfbfbf;
        /* Span text color */
    }

    .breadcrumbs span a {
        border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        color: #ffffff;
        /* Link color specifically for "Home" */
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .breadcrumbs span a:hover {
        color: #edca1b;
        /* Darker color when hovered */
    }

    /* Legend Styles */
    .legend-box {
        display: inline-block;
        width: 16px;
        height: 16px;
        margin-right: 5px;
        border-radius: 3px;
    }
    #monthlySalesChart {
        display: flex;
        justify-content: center !important;
    }

    /* Responsive Chart Styles */
    @media (max-width: 768px) {
        .custom-card {
            margin-bottom: 15px;
        }

        .custom-chart-card {
            margin-bottom: 15px;
        }
    }
</style>
