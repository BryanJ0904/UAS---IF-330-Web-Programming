<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="add.css">
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
  
.klien img {
    width: 100%;
    max-width: 150px;
    height: auto;
    margin-right: 10px;
    margin-bottom: 10px;
}
  </style>
</head>
<body>
@include('tampilan.main')
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
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ asset('images/2.jpeg') }}" alt="" style="width: 100%; height: 100vh"></div>
            <div class="carousel-container">
            </div>
          </div>
          <!--slide 3 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ asset('images/3.jpeg') }}" alt="" style="width: 100%; height: 100vh"></div>
            <div class="carousel-container">
            </div>
          </div>
          <!--slide 4 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ asset('images/4.jpeg') }}" alt="" style="width: 100%; height: 100vh"></div>
            <div class="carousel-container">
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

  <section id="smart-watches" >
      <div class="container">
       <h1 data-aos="fade-up">SEJARAH PERUSAHAAN KAMI</h1>
       <p data-aos="fade-up">2015 To Today</p>
       <p data-aos="fade-up">PT ini bergerak di bidang percetakan sparepart motor dan mobil, sparepart pesanan dari konsumen PT lain, untuk motor HONDA KAWASAKI untuk mobil tergantung pesanan.</p>
       <p data-aos="fade-up">PT TRI DAYA LANGGENG bergerak dalam bidang pembuatan spare part kendaraan, alat-alat elektronik dan alat-alat rumah tangga serta peralatan lainnya, yang didirikan pada tahun 2015 oleh para praktisi yang berpengalaman dalam bidangnya masing-masing. Dengan didukung tenaga, mesin dan alat yang memadai kami yakin akan mampu memberikan layanan terbaik kepada setiap pelanggan kami. Juga dedikasi, kompetensi dan keinginan untuk terus maju dan berkembang dari kamiyang akan memberikan hasil terbaik demi kepuasan pelanggan kami</p>
      </div>
    </section>

    <section class="aboutus d-flex align-items-center">
    <div class="container">
  <div class="row">
    <div class="col-sm" data-aos="fade-up">
      <h1>VISI</h1>
      <p>Menjadi perusahaan manufaktur yang selalu mengutamakan kepuasan pelanggan melalui tiga (3) pillar "Quality, Cost, Delivery."</p>
    </div>
    <div class="col-sm" data-aos="fade-up">
      <h1>MISI</h1>
      <p>Memberdayakan sumber daya manusia menjadi individu yang berkualitas, 
          tangguh dan berdedikasi tinggi serta melakukan perbaikan yang berkesinambungan 
          demi tercapai kualitas produk yang handal</p>
    </div>
  </div>
  <div class="row klien mt-3" data-aos="fade-up">
    <h1 class="mb-3">KLIEN</h1>
    <img src="{{ asset('foto\partner1.png') }}" class="img-fluid">
    <img src="{{ asset('foto\partner2.png') }}" class="img-fluid">
    <img src="{{ asset('foto\partner3.png') }}" class="img-fluid">
    <img src="{{ asset('foto\partner4.png') }}" class="img-fluid">
  </div>
  </section>
  <script>
  AOS.init();
</script>

</body>
</html>
@include('tampilan.footer')