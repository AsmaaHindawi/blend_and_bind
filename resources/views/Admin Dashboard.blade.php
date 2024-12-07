@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="header-banner position-relative">
        <img src="{{ asset('images/image1.jpg') }}" alt="Dashboard Header" class="w-100">
        <div class="header-overlay text-center">
            <h1 class="header-title">Admin Dashboard</h1>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
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
                <div class="custom-card-dashboard shadow text-center">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text text-success font-weight-bold">{{ $userCount ?? '0' }} Users</p>
                    </div>
                </div>
            </div>

            <!-- Admins Card -->
            <div class="col-md-3">
                <div class="custom-card-dashboard shadow text-center">
                    <div class="card-body">
                        <h5 class="card-title">Admins</h5>
                        <form action="{{ route('admin.admins.update') }}" method="POST">
                            @csrf
                            <input type="number" name="adminCount" value="{{ $adminCount ?? '0' }}" min="1"
                                class="form-control custom-input-dashboard">
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Books Card -->
            <div class="col-md-3">
                <div class="custom-card-dashboard shadow text-center">
                    <div class="card-body">
                        <h5 class="card-title">Books</h5>
                        <form action="{{ route('admin.books.update') }}" method="POST">
                            @csrf
                            <input type="number" name="bookSales" value="{{ $bookCount ?? '0' }}" min="0"
                                class="form-control custom-input-dashboard">
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Menu Items Card -->
            <div class="col-md-3">
                <div class="custom-card-dashboard shadow text-center">
                    <div class="card-body">
                        <h5 class="card-title">Menu Items</h5>
                        <form action="{{ route('admin.menus.update') }}" method="POST">
                            @csrf
                            <input type="number" name="menuSales" value="{{ $menuCount ?? '0' }}" min="0"
                                class="form-control custom-input-dashboard">
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4 custom-charts">
            <!-- Pie Chart Section -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="custom-chart-card shadow w-100">
                    <div class="card-header bg-dark text-white text-center">
                        <h5 class="card-title">Website Statistics</h5>
                    </div>
                    <div class="card-body text-center">
                        <canvas id="statisticsPieChart" style="max-height: 400px;"></canvas>
                        <div class="mt-4 text-center">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Histogram Chart Section -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="custom-chart-card shadow w-100">
                    <div class="card-header bg-dark text-white">
                        <h5 class="card-title mb-0">Monthly Recap Report</h5>
                        <button class="btn btn-sm btn-light float-right toggle-chart-type">
                            Toggle to Curve
                        </button>
                    </div>
                    <div class="card-body">
                        <canvas id="monthlySalesChart" style="max-height: 400px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- To-Do List Section -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card todo-card-dashboard">
                    <div class="card-header todo-card-header-dashboard d-flex justify-content-between align-items-center">
                        <h5>To Do List</h5>
                        <button id="show-first-three" class="btn btn-outline-secondary btn-sm">123</button>
                    </div>
                    <div class="card-body">
                        <ul id="todo-list" class="list-group-todo-dashboard"></ul>
                        <button id="add-item-button" class="btn btn-primary w-100 mt-3">+ Add item</button>
                        <form id="add-todo-form" class="mt-3 d-none">
                            <input type="text" id="new-task" placeholder="Task Name" class="form-control mb-2">
                            <input type="text" id="new-task-time" placeholder="Task Duration" class="form-control mb-2">
                            <button type="submit" class="btn btn-success w-100">Add Task</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Latest Orders Section -->
            <div class="col-md-6">
                <div class="card orders-card-dashboard">
                    <div class="card-header orders-card-header-dashboard d-flex justify-content-between align-items-center">
                        <h5>Latest Orders</h5>
                    </div>
                    <div class="card-body">
                        <table class="table orders-table-dashboard">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Item</th>
                                    <th>Status</th>
                                    <th>Popularity</th>
                                </tr>
                            </thead>
                            <tbody id="orders-list"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products and Store Overview Section -->
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-8 mb-5">
                <div class="card products-card-dashboard">
                    <div class="card-header products-card-header-dashboard d-flex justify-content-between align-items-center">
                        <h5>Products</h5>
                        <button class="btn btn-outline-secondary btn-sm" id="export-excel">
                            <i class="fa fa-download"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table products-table-dashboard" id="products-table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Sales</th>
                                </tr>
                            </thead>
                            <tbody id="products-list"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
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
            backgroundColor: ['#36A2EB', '#FFCE56', '#FF6384', '#4BC0C0'],
            hoverOffset: 4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: true,
                position: 'bottom'
            }
        }
    }
});

let chartType = 'bar';
const monthlySalesCtx = document.getElementById('monthlySalesChart').getContext('2d');
let monthlySalesChart = new Chart(monthlySalesCtx, {
    type: chartType,
    data: {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Sales',
            data: [500, 700, 800, 600, 750],
            backgroundColor: chartType === 'bar' ?
                ['#007bff', '#28a745', '#ffc107', '#dc3545', '#6c757d'] : 'transparent',
            borderColor: '#007bff',
            borderWidth: chartType === 'line' ? 2 : 1,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: true,
                position: 'top'
            }
        }
    }
});

document.querySelector('.toggle-chart-type').addEventListener('click', () => {
    chartType = chartType === 'bar' ? 'line' : 'bar';
    monthlySalesChart.destroy();
    monthlySalesChart = new Chart(monthlySalesCtx, {
        type: chartType,
        data: {
            labels: ['January', 'February', 'March', 'April', 'May'],
            datasets: [{
                label: 'Sales',
                data: [500, 700, 800, 600, 750],
                backgroundColor: chartType === 'bar' ?
                    ['#007bff', '#28a745', '#ffc107', '#dc3545', '#6c757d'] : 'transparent',
                borderColor: '#007bff',
                borderWidth: chartType === 'line' ? 2 : 1,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {

    let todoList = JSON.parse(localStorage.getItem('todoList')) || [
        { task: "Prepare daily sales report", time: "2 hours", done: false },
        { task: "Inventory check", time: "1 day", done: false }
    ];

    const todoListContainer = document.getElementById('todo-list');
    const addItemButton = document.getElementById('add-item-button');
    const addTodoForm = document.getElementById('add-todo-form');
    const showFirstThreeButton = document.getElementById('show-first-three');

    let showAllTasks = true; 

    function renderTodoList(tasks) {
        todoListContainer.innerHTML = ""; 
        tasks.forEach((item) => {
            const listItem = document.createElement('li');
            listItem.className = 'list-group-item-todo-dashboard d-flex align-items-center justify-content-between';
            listItem.innerHTML = `
                <div class="d-flex align-items-center">
                    <input type="checkbox" ${item.done ? 'checked' : ''} class="mr-2" onchange="this.checked ? this.nextElementSibling.classList.add('text-muted', 'text-decoration-line-through') : this.nextElementSibling.classList.remove('text-muted', 'text-decoration-line-through');">
                    <span>${item.task}</span>
                </div>
                <span class="badge badge-secondary">${item.time}</span>
            `;
            todoListContainer.appendChild(listItem);
        });
    }

    renderTodoList(todoList);

    function saveToLocalStorage() {
        localStorage.setItem('todoList', JSON.stringify(todoList));
    }

    addItemButton.addEventListener('click', () => {
        addItemButton.classList.add('d-none');
        addTodoForm.classList.remove('d-none');
    });

    addTodoForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const newTaskText = document.getElementById('new-task').value;
        const newTaskTime = document.getElementById('new-task-time').value;

        if (newTaskText && newTaskTime) {

            todoList.push({ task: newTaskText, time: newTaskTime, done: false });
            saveToLocalStorage(); 
            renderTodoList(todoList); 

            addTodoForm.reset();
            addTodoForm.classList.add('d-none');
            addItemButton.classList.remove('d-none');
        }
    });

    showFirstThreeButton.addEventListener('click', () => {
        if (showAllTasks) {
            const firstThreeTasks = todoList.slice(0, 3);
            renderTodoList(firstThreeTasks);
            showFirstThreeButton.textContent = 'Show All Tasks'; 
        } else {

            renderTodoList(todoList);
            showFirstThreeButton.textContent = 'Show First Three'; 
        }
        showAllTasks = !showAllTasks; 
    });
});

const orders = [
    { id: "ORD001", item: "Cappuccino", status: "Delivered", popularity: "95%" },
    { id: "ORD002", item: "Chocolate Cake", status: "Pending", popularity: "85%" },
    { id: "ORD003", item: "Smoothie", status: "Shipped", popularity: "75%" }
];

const ordersContainer = document.getElementById('orders-list');
orders.forEach(order => {
    const row = document.createElement('tr');
    row.innerHTML = `
        <td><a href="#" class="text-info">${order.id}</a></td>
        <td>${order.item}</td>
        <td><span class="badge badge-${order.status === 'Delivered' ? 'success' : 'warning'}">${order.status}</span></td>
        <td>${order.popularity}</td>
    `;
    ordersContainer.appendChild(row);
});

const products = [
    { name: "فقه السنة", price: "$20.99", sales: "150 Sold" },
    { name: "No one But You", price: "$15.00", sales: "98 Sold" },
    { name: "1984", price: "$14.99", sales: "120 Sold" }
];

const productsContainer = document.getElementById('products-list');
products.forEach(product => {
    const row = document.createElement('tr');
    row.className = 'products-row-dashboard';
    row.innerHTML = `
        <td>${product.name}</td>
        <td>${product.price}</td>
        <td><span class="badge badge-success">${product.sales}</span></td>
    `;
    productsContainer.appendChild(row);
});

document.getElementById('export-excel').addEventListener('click', function () {

    let table = document.getElementById('products-table');
    let workbook = XLSX.utils.table_to_book(table, {sheet: "Products"});
    XLSX.writeFile(workbook, 'Products.xlsx');
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

    .breadcrumbs {
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 1px;
        color: #bfbfbf;
    }

    .breadcrumbs span {
        border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        color: #bfbfbf;
    }

    .breadcrumbs span a {
        border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        color: #ffffff;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .breadcrumbs span a:hover {
        color: #edca1b;
    }

    .custom-card-dashboard {
        border-radius: 10px;
        padding: 15px;
        background-color: #f8f9fa;
    }

    .card-header {
        background-color: #343a40;
        color: #fff;
        font-size: 16px;
        padding: 10px;
        text-align: center;
    }

    .list-group-item-todo-dashboard {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
    }

    .table.orders-table-dashboard th, .table.orders-table-dashboard td,
    .table.products-table-dashboard th, .table.products-table-dashboard td {
        vertical-align: middle;
    }

    #store-overview div.store-overview-entry-dashboard {
        margin-bottom: 10px;
        font-size: 14px;
    }

    #add-todo-item {
        background-color: #007bff;
        color: white;
    }

    #monthlySalesChart {
        display: flex;
        justify-content: center !important;
    }

    /* Responsive Chart Styles */
    @media (max-width: 768px) {
        .custom-card-dashboard {
            margin-bottom: 15px;
        }

        .custom-chart-card {
            margin-bottom: 15px;
        }
    }

    .custom-charts .custom-chart-card {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .custom-charts canvas {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 768px) {
        .custom-charts .col-md-6 {
            margin-bottom: 20px;
        }

        .custom-charts .custom-chart-card {
            width: 100%;
        }
    }
</style>
