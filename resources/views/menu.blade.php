@extends('layouts.app')

@section('title', 'Menu')

@section('content')

<div class="container-fluid px-0">
    <!-- Header Section -->
    <div class="header-banner position-relative">
        <img src="{{ asset('images/menut.avif') }}" alt="Menu Header" class="w-100">
        <div class="header-overlay text-center">
            <h1 class="header-title">Our Menu</h1>
        </div>
    </div>
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5 pb-3">
        <h3 class="mb-5 heading-pricing ftco-animate">Appetizers</h3>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/garlic_bread.jpg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3 ><span>Garlic Bread</span></h3>
              <span class="price">$4.00</span>
            </div>
            <div class="d-block">
              <p>Toasty, buttery bread topped with a generous layer of garlic, perfect for starting your meal with a savory bite.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/mozzarella_sticks.jpg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Mozzarella Sticks</span></h3>
              <span class="price">$6.00</span>
            </div>
            <div class="d-block">
              <p>Crispy on the outside and melt-in-your-mouth cheesy on the inside, these mozzarella sticks are a crowd favorite.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/spring_rolls.jpg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Spring Rolls</span></h3>
              <span class="price">$5.50</span>
            </div>
            <div class="d-block">
              <p>Delicate and crispy spring rolls filled with fresh vegetables, offering a perfect balance of crunch and flavor.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/curlyfries.jpeg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Curly Fries</span></h3>
              <span class="price">$5.00</span>
            </div>
            <div class="d-block">
              <p>Spiraled, crispy, and lightly seasoned, these curly fries are a fun and tasty way to enjoy a snack.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/warakenab.jpeg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Warak Enab</span></h3>
              <span class="price">$3.00</span>
            </div>
            <div class="d-block">
              <p>Stuffed grape leaves with a mixture of rice, herbs, and spices, offering a unique and delightful flavor.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-5 pb-3">
        <h3 class="mb-5 heading-pricing ftco-animate">Salads</h3>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/tabouleh.jpeg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Tabouleh</span></h3>
              <span class="price">$4.00</span>
            </div>
            <div class="d-block">
              <p>A refreshing Lebanese salad made with parsley, tomatoes, bulgur, and a tangy lemon dressing.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/fatoush.jpeg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Fatoush</span></h3>
              <span class="price">$4.00</span>
            </div>
            <div class="d-block">
              <p>A vibrant salad made with fresh vegetables and crispy fried pita bread, served with a zesty dressing.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/ceasar.webp);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Chicken Ceasar Salad</span></h3>
              <span class="price">$5.50</span>
            </div>
            <div class="d-block">
              <p>Grilled chicken on top of a bed of crisp lettuce, tossed with Caesar dressing, croutons, and parmesan cheese.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/greek.jpeg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Greek Salad</span></h3>
              <span class="price">$5.50</span>
            </div>
            <div class="d-block">
              <p>A Mediterranean classic made with cucumbers, tomatoes, olives, feta cheese, and a light olive oil dressing.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/crab.jpeg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Crab Salad</span></h3>
              <span class="price">$7.50</span>
            </div>
            <div class="d-block">
              <p>A delicate crab salad mixed with fresh vegetables and a light, creamy dressing.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/cheesecake.jpg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Cheese Cake</span></h3>
              <span class="price">$7.50</span>
            </div>
            <div class="d-block">
              <p>A creamy and smooth cheesecake with a graham cracker crust, topped with fresh berries.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/chocolate_cake.jpg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Chocolate Cake</span></h3>
              <span class="price">$7.00</span>
            </div>
            <div class="d-block">
              <p>A rich and indulgent chocolate cake layered with smooth frosting and finished with a decadent drizzle.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/berrycake.jpeg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Berry Cake</span></h3>
              <span class="price">$7.00</span>
            </div>
            <div class="d-block">
              <p>A light sponge cake topped with a mix of fresh berries, perfect for those who love fruity desserts.</p>
            </div>
          </div>
        </div>

        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/ice_cream_sundae.jpg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Ice Cream Sundae</span></h3>
              <span class="price">$5.50</span>
            </div>
            <div class="d-block">
              <p>Delicious vanilla ice cream topped with hot fudge, whipped cream, and a cherry.</p>
            </div>
          </div>
        </div>

        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/swissroll.jpeg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Swiss Roll</span></h3>
              <span class="price">$5.00</span>
            </div>
            <div class="d-block">
              <p>A fluffy sponge cake rolled with a creamy filling, offering a light and satisfying dessert.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/latte.jpg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Latte</span></h3>
              <span class="price">$4.50</span>
            </div>
            <div class="d-block">
              <p>A smooth and creamy espresso-based drink topped with steamed milk and a light foam.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/coffee.jpg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Black Coffee</span></h3>
              <span class="price">$2.50</span>
            </div>
            <div class="d-block">
              <p>A bold and rich coffee, perfect for those who enjoy the deep flavor of freshly brewed coffee.</p>
            </div>
          </div>
        </div>
        
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/cappuccino.jpg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Cappuccino</span></h3>
              <span class="price">$3.50</span>
            </div>
            <div class="d-block">
              <p>Freshly squeezed orange juice with a burst of natural citrus flavor, perfect for a refreshing break.</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/smoothie.jpg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Fruit Smoothie</span></h3>
              <span class="price">$4.00</span>
            </div>
            <div class="d-block">
              <p>A creamy blend of fresh fruits, perfect for a nutritious and delicious drink to start your day.</p>
            </div>
          </div>
        </div>

      <div class="pricing-entry d-flex ftco-animate">
          <div class="img" style="background-image: url(images/tea.jpg);"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Green Tea</span></h3>
              <span class="price">$3.00</span>
            </div>
            <div class="d-block">
              <p>A refreshing and antioxidant-rich green tea served hot or iced.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<div class="container my-5">
    <h1 class="text-center mb-4" style="font-family: 'Dancing Script', cursive; font-size: 48px; color: black ;">Our Menu</h1>

    <!-- Filter Buttons -->
    <ul class="filters_menu d-flex justify-content-center mb-4">
        <li class="active mx-2" data-filter="*">All</li>
        <li class="mx-2" data-filter=".appetizers">Appetizers</li>
        <li class="mx-2" data-filter=".desserts">Desserts</li>
        <li class="mx-2" data-filter=".drinks">Drinks</li>
        <li class="mx-2" data-filter=".drinks">Salads</li>
    </ul>

    @if($menuItems->isEmpty())
        <p class="text-center">No menu items available at the moment.</p>
    @else
        <div class="row grid justify-content-center">
            <!-- Start the Loop -->
            @foreach ($menuItems as $item)
                @php
                    // Map categories to filter classes
                    $categoryMap = [
                        'Hot Drinks' => 'drinks',
                        'Cold Drinks' => 'drinks',
                        'Desserts' => 'desserts',
                        'Appetizers' => 'appetizers',
                    ];
                    $filterClass = $categoryMap[$item->category] ?? strtolower(str_replace(' ', '-', $item->category));
                @endphp

                <!-- Single Menu Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 all {{ $filterClass }}">
                    <div class="menu-card">
                        <div class="menu-card-img">
                            <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}">
                            <div class="menu-card-curve"></div>
                        </div>
                        <div class="menu-card-body">
                            <h5>{{ $item->name }}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="menu-card-price">${{ number_format($item->price, 2) }}</span>
                                <form action="{{ route('cart.add', ['id' => $item->item_id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="type" value="menu">
                                    <button type="submit" class="btn btn-warning btn-circle">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Menu Item -->
            @endforeach
            <!-- End the Loop -->
        </div>
    @endif
</div>
@endsection

@push('styles')
<style>
    
    /* Card container */
    .menu-card {
        background-color: #4476ac; /* Footer blue color */
        color: #fff; /* White text */
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        width: 90%; /* Make box narrower */
        margin: auto; /* Center the box */
    }

    .menu-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Image container */
    .menu-card-img {
        position: relative;
    }

    .menu-card-img img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-bottom: none; /* Remove border for smooth curve */
    }

    .menu-card-curve {
        position: absolute;
        bottom: -20px;
        left: 0;
        width: 100%;
        height: 40px;
        background-color: #4476ac; /* Same color as the box */
        border-radius: 50% 50% 0 0; /* Create the curve */
        z-index: 1;
    }

    /* Body container */
    .menu-card-body {
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: calc(100% - 180px); /* Remaining space below the image */
        z-index: 2;
        position: relative;
    }

    .menu-card-body h5 {
        font-size: 16px;
        font-weight: bold;
        color: #fff; /* White text for item name */
        margin-bottom: 10px;
        text-align: center;
    }

    /* Price and button alignment */
    .menu-card-price {
        font-size: 14px;
        font-weight: bold;
        color: #FFD700; /* Bright yellow for the price */
    }

    .btn-circle {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #FFD700; /* Bright yellow button */
        color: #000;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-circle:hover {
        background-color: #FFA500;
        color: #fff;
    }

    /* Filters Menu */
    .filters_menu {
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }

    .filters_menu li {
        font-size: 16px;
        cursor: pointer;
        padding: 8px 15px;
        border: 1px solid #ddd;
        border-radius: 20px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .filters_menu li.active,
    .filters_menu li:hover {
        background-color: #FFD700;
        color: #000;
    }

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
        margin-bottom: 20px;
        color: white;
    }

    .line-decoration {
        height: 2px;
        background-color: #FFD700; /* Yellow Line */
        flex: 1;
        max-width: 100px;
    }

    .line-decoration-author {
        height: 2px;
        background-color: #4476ac; /* Blue Line */
        flex: 1;
        max-width: 100px;
    }



</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Filtering functionality
        document.querySelectorAll('.filters_menu li').forEach(filter => {
            filter.addEventListener('click', function () {
                document.querySelectorAll('.filters_menu li').forEach(el => el.classList.remove('active'));
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                document.querySelectorAll('.grid .all').forEach(item => {
                    if (filterValue === '*' || item.classList.contains(filterValue.substring(1))) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush