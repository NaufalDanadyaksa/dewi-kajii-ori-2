@php
    $atraksi = \App\Models\Atraksi::with('images')->get();
    $wisata = \App\Models\PaketWisata::with('images')->get();
    $ikan = \App\Models\KatalogIkan::with('images')->get();
    $homestay = \App\Models\Homestay::with('images')->get();
    $sejarah= \App\Models\Sejarah::first();
    $berita= \App\Models\Berita::get();
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Desa Wisata Kajii</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"
  />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<!-- Navbar Mobile -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light d-lg-none p-0">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img
        src="element/logo.png"
        alt="logo"
        class="img-fluid"
        style="max-width: 40px; height: auto"
      />
    </a>

    <button
      class="navbar-toggler border-0 text-white"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span><i class="ti ti-menu-2"></i></span>
    </button>
  </div>
</nav>

<!-- Offcanvas Sidebar -->
<div
  class="offcanvas offcanvas-end d-lg-none navbar-mobile"
  tabindex="-1"
  id="offcanvasNavbar"
  aria-labelledby="offcanvasNavbarLabel"
>
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
    <button
      type="button"
      class="btn text-white ms-auto"
      data-bs-dismiss="offcanvas"
      aria-label="Close" 
    ><i class="ti ti-x icon-2xl"></i></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Atraksi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Paket Wisata</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Katalog Ikan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Homestay</a>
      </li>
    </ul>
  </div>
</div>

<!-- Navbar Desktop -->
<nav
  class="navbar navbar-expand-lg fixed-top navbar-light d-none d-lg-block p-0"
>
  <div class="container">
    <a class="navbar-brand" href="#">
      <img
        src="element/logo.png"
        alt="logo"
        class="img-fluid"
        style="max-width: 40px; height: auto"
      />
    </a>
    <button
      class="navbar-toggler border-0 text-white"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarText"
      aria-controls="navbarText"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span><i class="ti ti-menu-2"></i></span>
    </button>
    <div
      class="collapse navbar-collapse justify-content-start"
      id="navbarText"
    >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a
            class="text-white nav-link active"
            aria-current="page"
            href="#section1"
            >Home</a
          >
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="#section2">Atraksi</a>
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="#section2">Paket Wisata</a>
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="#section2">Katalog Ikan</a>
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="#section2">Homestay</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <section class="dashboard">
    <img src="fotbarrr.jpg" class="pict-dahboard d-block w-100" alt="Image 1" />
    <div class="text-overlay">
      <h1>Welcome to</h1>
      <h1><span>Dewi Kajii</span></h1>
    </div>
  </section>

  <!-- Atraksi -->
  <section class="atraksi" id="atraksi">
  <div class="col-md-4">
        <img src="./element/sea-star.png" style="width: 10rem; margin-bottom:-90px;">
      </div>
    <div class="container-atraksi container justify-content-center">
      <div class="row">
        <div class="col text-center">
          <p class="fw-bold fs-5" style="margin-top: 25px; margin-bottom:40px;">A T R A K S I</p>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-5 justify-content-center">
       @foreach ($atraksi as $item)
       <div class="col-6 col-md">
        <div class="card-atraksi text-center">
          <div class="foto">
            <div
              id="carouselPonyo1"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                
                    @foreach($item->images as $image)
                    <div class="carousel-item active">
                    <img src="{{ asset('/posts/atraksi/'.$image->url) }}"   alt="Description of image"
                    class="img-fluid foto-atraksi"
                    >
                    </div>
                @endforeach
                
              </div>
            </div>
            <p class="deskripsi">
              {{ $item->description }}
            </p>
          </div>
          <p class="mt-3 fw-bold">{{$item->name}}</p>
          <a href="{{ url('atraksi/detail/'.$item->id) }}" class="btn  text-white" style="background-color: #d8eb8ae9;">Show</a>
        </div>
      </div>
       @endforeach
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </section>

  <section class="cta mt-5">
    <div class="container text-center">
      <div class="row">

        <div class="col order-last">
          <img src="./element/koiii.png" alt="" srcset="" style="width: 18rem">
        </div>
          <div class="row d-flex justify-content-center">
              @foreach ($atraksi as $item)
              <div class="col-md-3 mb-3 col-6 d-flex justify-content-center">
                  @foreach($item->images as $image)
                  <div class="card card-atraksi">
                      <div class="hover">
                          <img src="{{ asset('/posts/atraksi/'.$image->url) }}" alt="Description of image" class="atraksi-pict">
                          <p class="deskripsi-atraksi h-4"> {{ $item->description }}</p>
                      </div>
                      <h6 class="judul-atraksi mt-2 fw-bold">Kaonashi</h6>
                  </div>
                  @endforeach
              </div>
              @endforeach
          </div>
      </div>
  </section>



<!-- Paket Wisata -->
<section class="paket-wisata">
  <div class="col text-center">
    <p class="fw-bold fs-5 mt-5">P A K E T W I S A T A</p>
  </div>
  <div class="swiper-container-Paket" style="overflow-x: hidden;">
    <div class="swiper-wrapper">
      @foreach ($wisata as $item)
        <div class="swiper-slide">
          @foreach($item->images as $image)
            <div class="card-paket-wisata">
              <img src="{{ asset('/posts/paket_wisata/'.$image->url) }}" alt="Description of image" class="pict-paket">
              <div class="text-container-paket">
                <p class="judul-paket">{{ $item->name }}</p>
                @foreach($item->content as $content)
                  <p class="list-paket">{{ $content->content }}</p>
                @endforeach
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>



<section class="homestay mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row row-cols-2 row-cols-md-4 justify-content-center"
        @foreach ($homestay as $item)
          <div class="col mt-3 d-flex justify-content-center">
            @foreach($item->images as $image)
            <div class="card card-homestay">
              <img src="{{ asset('/posts/homestay/'.$image->url) }}" class="homestay-pict" alt="card" />
              <div class="card-overlay-text">
                <p class="homestay-title pt-2">{{$item->name}}</p>
              </div>
              @endforeach
              <div class="card-overlay-button">
                <a href="{{ url('homestay/detail/'.$item->id) }}"><button class="btn button-homestay px-2 py-2 text">Selengkapnya</button></a>
              </div>
            </div>
            @endforeach
          </div>
        
        </div>
      </div>
    </div>
  </div>
</section>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
var swiper = new Swiper(".swiper-container-berita", {
  initialSlide: 2,
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 150,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  on: {
    slideChange: function () {
      var activeSlide = this.slides[this.activeIndex];
      activeSlide.classList.add("swiper-slide-active");
    },
  },
});

const swiperUlasan = new Swiper(".swiper-container-ulasan", {
  slidesPerView: 2,
  spaceBetween: 30,
  direction: "horizontal",
  loop: false,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    768: {
      slidesPerView: 4,
      spaceBetween: 40
    }
  },
});

const swiperPaket = new Swiper(".swiper-container-Paket", {
  slidesPerView: 2,
  spaceBetween: 30,
  direction: "horizontal",
  loop: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 4,
      spaceBetween: 40
    }
  },
});

  </script>
</body>
</html>