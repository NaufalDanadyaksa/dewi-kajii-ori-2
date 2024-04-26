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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Rozha+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <link rel="icon" href="./element/logo.png" type="img">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-light d-lg-none p-0">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img
          src="img/logo.png"
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
          src="img/logo.png"
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
  </section>

  <section class="container-sejarah p-5">
    <div class="container sjrh">
        <div class="container text-start">
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-6"> <!-- Adjust column size as needed for responsiveness -->
                <img src="fotbarrr.jpg" alt="" srcset="" class="pict-sejarah img-fluid">
              </div>
              <div class="col-md-6 col-lg-4"> <!-- Adjust column size as needed for responsiveness -->
                <h2 class="text-sejarah">Sejarah</h2>
                <p class="deskripsi-sejarah text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus architecto repellendus magni sed minus nulla voluptate distinctio ipsum dignissimos alias qui id ab eos soluta illo quam, inventore amet. Unde? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa consectetur quasi eum. Atque nobis minima blanditiis neque explicabo dignissimos voluptates. Ratione, labore. Debitis aut illum corporis fugit, iste harum ad? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore maxime nemo culpa error id omnis dolorum! Repellat, deserunt perspiciatis. Quos error praesentium architecto deserunt explicabo possimus est quasi eius iure.</p>
              </div>
            </div>
          </div>
    </div>
  </section>

  <section class="berita" id="berita">
    <div class="swiper-container-berita">
      <div class="swiper-wrapper">

        <div class="swiper-slide swiper-slide-berita">
          <div class="card card-berita d-flex justify-content-center">
            <img src="fotbarrr.jpg" class="berita-pict" alt="card" />
            <div class="card-text-container">
              <p class="text-end me-2">Title</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi iste illum sunt officia. Sint, cum. Nisi eaque facilis molestiae debitis amet aut saepe provident natus inventore error consequatur, dolores hic.</p>
              <button class="btn button-berita"> Selengkapnya</button>
            </div>  
          </div>
        </div>   
      </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-pagination"></div>
  </section>




  <!-- Atraksi -->
  <section class="atraksi" id="atraksi">
      <div class="container mt-5">
        <div>
          <h1>Atraksi</h1>
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