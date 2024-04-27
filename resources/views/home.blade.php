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

  <section class="container-sejarah p-5">
    <div class="container sjrh">
        <div class="container text-start">
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-6"> <!-- Adjust column size as needed for responsiveness -->
                <img src="fotbarrr.jpg" alt="" srcset="" class="pict-sejarah img-fluid">
              </div>
              <div class="col-md-6 col-lg-4"> <!-- Adjust column size as needed for responsiveness -->
                <h2 class="text-sejarah">Sejarah</h2>
                <p class="deskripsi-sejarah text-white">{{$sejarah->article}}</p>
              </div>
            </div>
          </div>
    </div>
  </section>

  <section class="berita" id="berita">
    <div class="swiper-container-berita">
      <div class="swiper-wrapper">
        @foreach ($berita as $item)
        <div class="swiper-slide swiper-slide-berita">
          <div class="card card-berita d-flex justify-content-center">
            <img src="{{ asset($item->image) }}" class="berita-pict" alt="card" />
            <div class="card-text-container">
              <p class="text-end me-2">{{ $item->title }}</p>
              <p class="card-text">{{ $item->article }}</p>
              <a href="{{url('berita/'.$item->id)}}" class="btn button-berita">Selengkapnya</a>
            </div>  
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div class="swiper-pagination"></div>
  </section>
  




  <!-- Atraksi -->
  <section class="atraksi" id="atraksi">
    <div>
      <h1 class="judul-atraksi ms-3 mt-3">Atraksi</h1>
    </div>
      <div class="container mt-5">
          <div class="row d-flex justify-content-center">
              @foreach ($atraksi as $item)
              <div class="col-md-3 mb-4 col-6 d-flex justify-content-center">
                  @foreach($item->images as $image)
                  <div class="card card-atraksi">
                      <div class="hover">
                          <img src="{{ asset('/posts/atraksi/'.$image->url) }}" alt="Description of image" class="atraksi-pict">
                          <p class="deskripsi-atraksi h-4"> {{ $item->description }}</p>
                      </div>
                      <h6 class="judul-atraksi mt-2 fw-bold">{{ $item->name}}</h6>
                  </div>
                  @endforeach
              </div>
              @endforeach
          </div>
      </div>
  </section>



<!-- Paket Wisata -->
<section class="paket-wisata">
  <div>
    <h1 class="judul-PaketWisata ms-3 mt-3">Paket Wisata</h1>
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
  <div>
    <h1 class="judul-Homestay ms-3 mt-3">Homestay</h1>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row row-cols-2 row-cols-md-4 d-flex justify-content-center">
          @foreach ($homestay as $item)
          <div class="col mb-4 d-flex justify-content-center">
            <div class="card card-homestay">
              @foreach($item->images as $image)
              <img src="{{ asset('/posts/homestay/'.$image->url) }}" class="homestay-pict" alt="card" />
              @endforeach
              <div class="card-overlay-text">
                <p class="homestay-title pt-2 text-white">{{$item->name}}</p>
              </div>
              <div class="card-overlay-button">
                <a href="{{ url('homestay/detail/'.$item->id) }}"><button class="btn button-homestay px-2 py-2 text">Selengkapnya</button></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ulasan">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="judul-ulasan">Ulasan</h1>
    <button class="btn button-ulasan me-3">
      <i class="ti ti-plus icon-plus">{{ url('ulasan'.$item->id) }}</i>
    </button>
  </div>

  <div class="swiper-container-ulasan">
    <div class="swiper-wrapper">

        <div class="swiper-slide swiper-slide-ulasan">
          <div class="card card-ulasan ms-4">
              <div class="card-body">
                  <p class="nama-pengulas pt-3 px-2"><strong>Devan Miliar</strong></p>
                  <p class="text-ulasan pt-3 px-2">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga autem, hic ab excepturi nostrum blanditiis
                      pariatur
                  </p>
              </div>
          </div>
        </div>

    </div>
  </div>
</section>

<div class="container" id="container" style="            width: 800px;
height: 500px;">
  <h1>Berikan Tanggapan Anda</h1>

  <div class="form-group">
      <input
      type="text"
      class="form-control text-white"
      placeholder="Username"
      name='name' value="" id="name"
      />
      <span class="placeholder"></span> 
  </div>

  <div class="form-group">
      <input
      type="text"
      class="form-control text-white"
      placeholder="Email"
      name='email' value="" id="email"
      />
      <span class="placeholder"></span> 
  </div>

  <div class="form-group">
      <input
      type="text"
      class="form-control text-white"
      placeholder="Tanggapan"
      name='description' value="" id="description"
      style="height: 90px;"
      />
      <span class="placeholder"></span> 
  </div>

  <button class="button-submit-ulasan">Kirim</button>
</div>


<section class="footer" style="color: #063C48;">
  <footer class="bg-light py-5 pt-5">
      <div class="container text-center">
          <div class="row">
              <div class="col-md-3">
                  <h5>Desa Wisata Kajii</h5>
                  <img src="/element/logo.png" alt="" style="width: 200px; height: 200px;">
              </div>
              <div class="col-md-3">
                  <h5>Alamat</h5>
                  <p class="text-start">Kadisoro, Gilangharjo, Kec. Pandak, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55761, Indonesia</p>
                  <h5 class="text-start">Map Lokasi</h5>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.975546932868!2d110.3090821!3d-7.897623299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aff55db42a7e5%3A0xb31e373fc1e28cad!2sDesa%20Wisata%20Kajii%20(Dewi%20Kajii%20-%20Edukasi%20Ikan%20Hias)!5e0!3m2!1sid!2sid!4v1711380178061!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  
              </div>
              <div class="col-md-3">
                  <div class="row">
                      <div class="col">
                          <h5>NO TELP</h5>
                          <p>0882-2520-8880</p>
                      </div>
                  </div>
                  <div class="row mt-3">
                      <div class="col">
                          <h5>About</h5>
                          <p>pelajari Selengkapnya</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <h5>OUR SOCIAL MEDIA</h5>
                  <ul>
                    <i class="ti ti-brand-youtube" style="font-size: 28px;"></i>
                    <i class="ti ti-brand-instagram" style="font-size: 28px;"></i>
                    <i class="ti ti-brand-facebook" style="font-size: 28px;"></i>
                    <i class="ti ti-brand-twitter" style="font-size: 28px;"></i>
                  </ul>
              </div>
          </div>
          <small class="text-muted ">&copy; 2024 Desa Wisata Kajii. All rights reserved.</small>
      </div>
  </footer>
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