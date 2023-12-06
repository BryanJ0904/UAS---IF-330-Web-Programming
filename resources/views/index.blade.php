@include('tampilan.main')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="icon" href ="img/logo.jpg" type = "image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="index.css" rel="stylesheet" />
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
</head>

<body>
<symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
</symbol>
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{ asset('images/1.jpeg') }}" alt="" style="width: 100%; height: 100vh"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                <div class="buttonatas">
                    <a href="produk" class="btn-get-started animate__animated animate__fadeInUp scrollto">Produk Kami</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ asset('images/2.jpeg') }}" alt="" style="width: 100%; height: 100vh"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown mb-0">Misi Kami</h2>
                <p class="animate__animated animate__fadeInUp">Memberikan kualitas pelayanan #1 di dunia</p>
                <a href="category.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai Belanja</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <section id="mobile-products" class="product-store position-relative padding-large no-padding-top">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Mesin-Mesin Yang Digunakan</h2>
            <div class="btn-right">
              <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
            </div>
          </div>
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item1.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 10</a>
                    </h3>
                    <span class="item-price">$980</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item2.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 11</a>
                    </h3>
                    <span class="item-price">$1100</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item3.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 8</a>
                    </h3>
                    <span class="item-price">$780</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item4.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 13</a>
                    </h3>
                    <span class="item-price">$1500</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item5.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 12</a>
                    </h3>
                    <span class="item-price">$1300</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="swiper-pagination position-absolute text-center"></div>
        </div>
      </div>
    </section>

    <section id="smart-watches" class="product-store padding-large position-relative">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Produk Kami</h2>
            <div class="btn-right">
              <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
            </div>
          </div>
          <div class="swiper product-watch-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item6.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Pink watch</a>
                    </h3>
                    <span class="item-price text-primary">$870</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item7.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Heavy watch</a>
                    </h3>
                    <span class="item-price text-primary">$680</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item8.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">spotted watch</a>
                    </h3>
                    <span class="item-price text-primary">$750</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item9.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">black watch</a>
                    </h3>
                    <span class="item-price text-primary">$650</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item10.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">black watch</a>
                    </h3>
                    <span class="item-price text-primary">$750</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="swiper-pagination position-absolute text-center"></div>
        </div>
      </div>
    </section>

    <!-- <div class="container-fluid paboutus">
        <div class="aboutuscard">
            <div class="col aboutuscontent">
                
            </div>
            <div class="col-lg-7 col-md-6 px-0">
              <div class="map_container">
                <div class="map">
                  <div id="googleMap"></div>
                </div>
              </div>
            </div>
              
        </div>
    </div> -->

  <section class="aboutus d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-5">
          <div class="heading_container">
            <h2>
              Tentang Kami
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 d-flex align-items-center justify-content-center">
          <div class="aboutuscard contact-form">
            <p><b><h2>Tri Daya Langgeng</h2></b></p>
            <p>2015 To Today</p>
            <p>PT ini bergerak di bidang percetakan sparepart motor dan mobil, sparepart pesanan dari konsumen PT lain, untuk motor HONDA KAWASAKI untuk mobil tergantung pesanan</p>
                
            <div class="btnabout">
              <a href="about">
                 <button class="btnatas">Tentang Kami</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    @include('tampilan.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  </body>

</html>