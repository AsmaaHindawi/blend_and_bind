@extends('layouts.app')

@section('title', 'Blend & Bind - Admin Dashboard')

@section('content')

<div class="container-fluid px-0">
    <!-- Header Section -->
    <div class="header-banner position-relative">
        <img src="{{ asset('images/image1.jpg') }}" alt="Menu Header" class="w-100">
        <div class="header-overlay text-center">
            <h1 class="header-title mt-5">Dashboard</h1>
            <p class="breadcrumbs">
                <span class="mr-2">
                    <a href="{{ route('home') }}">Home</a>
                </span>
                <span>Dashboard</span>
            </p>
        </div>
    </div>

</div>


<div class="container-fluid admin-dashboard-container px-5 py-4">
    <div class="row mb-4">
        <!-- Dashboard Overview Cards -->
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="fas fa-user-tie fa-3x"></i>
                        </div>
                        <div>
                            <h5 class="card-title">Admin Access</h5>
                            <p class="card-text">CPU Traffic: 10%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="fas fa-thumbs-up fa-3x"></i>
                        </div>
                        <div>
                            <h5 class="card-title">Customer Feedback</h5>
                            <p class="card-text">Likes: 41,410</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="fas fa-shopping-cart fa-3x"></i>
                        </div>
                        <div>
                            <h5 class="card-title">Sales</h5>
                            <p class="card-text">Total Sales: 760</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="fas fa-user-plus fa-3x"></i>
                        </div>
                        <div>
                            <h5 class="card-title">New Members</h5>
                            <p class="card-text">New Sign-Ups: 2,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Monthly Recap & Orders Overview -->
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Monthly Recap Report</h5>
                </div>
                <div class="card-body">
                    <canvas id="monthlyRecapChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Latest Orders</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Call of Duty IV</span>
                            <span class="badge bg-success">Shipped</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>iPhone 6 Plus</span>
                            <span class="badge bg-warning">Pending</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Samsung Smart TV</span>
                            <span class="badge bg-danger">Delivered</span>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary mt-3">View All Orders</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Goal Completion Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Goal Completion</h5>
                </div>
                <div class="card-body">
                    <div class="progress-group">
                        <span class="progress-text">Add Products to Cart</span>
                        <span class="float-end">160/200</span>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="progress-group">
                        <span class="progress-text">Complete Purchase</span>
                        <span class="float-end">310/400</span>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 77.5%"></div>
                        </div>
                    </div>
                    <div class="progress-group">
                        <span class="progress-text">Visit Premium Page</span>
                        <span class="float-end">480/800</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Overview -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Product Overview</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Some Product - Sales: 12,000, Price: $13
                        </li>
                        <li class="list-group-item">
                            Another Product - Sales: 123,234, Price: $29
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Online Store Overview</h5>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="storeOverviewChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    const ctx = document.getElementById('monthlyRecapChart').getContext('2d');
    const monthlyRecapChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Sales',
                data: [10, 20, 30, 40, 50, 60, 70],
                backgroundColor: 'rgba(0, 123, 255, 0.2)',
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 1
            }]
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

    .container-fluid.admin-dashboard-container {
        padding: 2rem; /* Added padding to create space around the container */
    }
    .card {
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card .card-header {
        background-color: #343a40;
        color: #ffffff;
    }
    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .list-group-item {
        border: none;
        border-bottom: 1px solid #ddd;
    }
    .badge {
        font-size: 0.9rem;
        padding: 0.5em 0.75em;
    }
    .progress {
        height: 1rem;
    }
</style>
