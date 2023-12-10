<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="styles.css">
  <link href="index.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


  <title>Bootstrap 5 Carousel Slider</title>
  <style>
    .c-item {
  height: 480px;
}

.c-img {
  height: 100%;
  object-fit: cover;
  filter: brightness(0.6);
}
  </style>
</head>
<body>
@include('tampilan.main')
  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="https://images.unsplash.com/photo-1579033461380-adb47c3eb938?fit=crop&w=1964&q=100" class="d-block w-100 c-img" alt="Slide 1">
        <div class="carousel-caption top-0 mt-4">
          <p class="mt-5 fs-3 text-uppercase">Discover the hidden world</p>
          <h1 class="display-1 fw-bolder text-capitalize">The Aurora Tours</h1>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="https://images.unsplash.com/photo-1516466723877-e4ec1d736c8a?fit=crop&w=2134&q=100" class="d-block w-100 c-img" alt="Slide 2">
        <div class="carousel-caption top-0 mt-4">
          <p class="text-uppercase fs-3 mt-5">The season has arrived</p>
          <p class="display-1 fw-bolder text-capitalize">3 available tours</p>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="https://images.unsplash.com/photo-1612686635542-2244ed9f8ddc?fit=crop&w=2070&q=100" class="d-block w-100 c-img" alt="Slide 3">
        <div class="carousel-caption top-0 mt-4">
          <p class="text-uppercase fs-3 mt-5">Destination activities</p>
          <p class="display-1 fw-bolder text-capitalize">Go glacier hiking</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section id="smart-watches" >
      <div class="container">
       <h1 data-aos="fade-up">Sejarah Perusahaan kami</h1>
       <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem laudantium explicabo maxime quos vel possimus architecto totam et voluptatum! Corporis adipisci laborum repudiandae officia dicta perferendis ab expedita perspiciatis obcaecati.</p>
      </div>
    </section>

    <section class="aboutus d-flex align-items-center">
    <div class="container">
  <div class="row">
    <div class="col-sm" data-aos="fade-up">
      <h1>VISI</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio architecto impedit ipsum error, veritatis fugiat aliquam suscipit consequuntur voluptas. Dignissimos quidem temporibus fuga sequi beatae quo dolore tempora quia debitis!</p>
    </div>
    <div class="col-sm" data-aos="fade-up">
      <h1>MISI</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, ea maiores assumenda cum corporis optio voluptate, culpa cupiditate rem vitae id qui tenetur commodi quaerat, unde recusandae totam numquam reprehenderit.</p>
    </div>
    <div class="col-sm" data-aos="fade-up">
      <h1>PARTNER</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus rerum quod dolorum unde quos molestiae odit pariatur esse quaerat exercitationem doloremque sapiente soluta aperiam eius labore ipsam, nostrum necessitatibus ea!</p>
    </div>
  </div>
</div>
  </section>
  <script>
  AOS.init();
</script>

</body>
</html>
@include('tampilan.footer')