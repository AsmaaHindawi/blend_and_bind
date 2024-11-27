@extends('layouts.app')

@section('title', 'Blend & Bind')

@section('content')
<section class="home-slider owl-carousel">

  <div class="slider-item" style="background-image: url(images/bg_1p.png); background-size: cover; background-repeat: no-repeat; " data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">

        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">About Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>About</span></p>
        </div>

      </div>
    </div>
  </div>
</section>

   <!-- info Section -->
   <section class="ftco-counter ftco-bg-light img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="100">0</strong>
                                <span>Coffee Branches</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="85">0</strong>
                                <span>Number of Awards</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="10567">0</strong>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="900">0</strong>
                                <span>Staff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end info Section -->

<section class="ftco-about d-md-flex">
  <div class="one-half img" style="background-image: url(images/ouvrir-un-coffee-shop-etapes.jpg);"></div>
  <div class="one-half ftco-animate">
    <div class="overlap">
      <div class="heading-section ftco-animate">
        <span class="subheading">Discover</span>
        <h2 class="mb-4">Our Story</h2>
      </div>
      <div>
        <p>At Blend & Bind, our journey began with a shared passion for the things we love most—books, food, and games. One of our founding members, a book and food enthusiast, dreamed of creating a space that would bring the joys of reading and dining together. Inspired by this vision, a fellow teammate who adored games and gaming joined forces to craft an experience that balanced fun, flavor, and the charm of stories. With the addition of two more friends who shared similar passions, the dream began to take shape. Together, we created a cozy haven where people can sip, read, play, and connect—offering something special for everyone. Blend & Bind is more than just a café or a bookstore; it’s a celebration of creativity, community, and the things we love.</p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/paper-texture.jpg); background-size: cover; background-repeat: no-repeat;"  data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Testimony</span>
        <h2 class="mb-4">Customers Says</h2>
        <p>it inspires us to grow, improve, and create an experience that truly resonates with your needs and passions.</p>
      </div>
    </div>
  </div>
  <div class="container-wrap">
    <div class="row d-flex no-gutters">
      <div class="col-lg align-self-sm-end">
        <div class="testimony">
           <blockquote>
              <p>&ldquo;Blend & Bind has created a one-of-a-kind space where I can enjoy my love for books and coffee all in one place. The cozy atmosphere and thoughtful touches make it my go-to spot for relaxation!&rdquo;</p>
            </blockquote>
            <div class="author d-flex mt-4">
              <div class="image mr-3 align-self-center">
                <img src="images/" alt="">
              </div>
              <div class="name align-self-center">Layla Al-Omari</div>
            </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end">
        <div class="testimony overlay">
           <blockquote>
              <p>&ldquo;Whether I'm playing games with friends or diving into a good book with a latte, Blend & Bind offers the perfect balance of fun and comfort. It's more than a café—it's an escape.&rdquo;</p>
            </blockquote>
            <div class="author d-flex mt-4">
              <div class="image mr-3 align-self-center">
                <img src="images/" alt="">
              </div>
              <div class="name align-self-center">Omar Al-Hassan</div>
            </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end">
        <div class="testimony">
           <blockquote>
              <p>&ldquo;The food here is not only delicious but thoughtfully paired with the ambiance. The staff is always welcoming, making each visit an absolute pleasure.&rdquo;</p>
            </blockquote>
            <div class="author d-flex mt-4">
              <div class="image mr-3 align-self-center">
                <img src="images/" alt="">
              </div>
              <div class="name align-self-center">Amina Khalil</div>
            </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end">
        <div class="testimony overlay">
           <blockquote>
              <p>&ldquo;Blend & Bind is a gem! It’s the perfect spot to connect with friends over games or unwind alone with a book. Every detail feels personal and warm.&rdquo;</p>
            </blockquote>
            <div class="author d-flex mt-4">
              <div class="image mr-3 align-self-center">
                <img src="images/" alt="">
              </div>
              <div class="name align-self-center">Youssef Al-Mansour</div>
            </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end">
        <div class="testimony">
          <blockquote>
            <p>&ldquo;I love how Blend & Bind has become a community hub. Whether I’m exploring the games, browsing books, or just enjoying the amazing coffee, I always leave feeling inspired. &rdquo;</p>
          </blockquote>
          <div class="author d-flex mt-4">
            <div class="image mr-3 align-self-center">
              <img src="images/" alt="">
            </div>
            <div class="name align-self-center">Noor Al-Fahad</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
