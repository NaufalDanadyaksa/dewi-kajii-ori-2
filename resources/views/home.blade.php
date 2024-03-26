@php
    $atraksi = \App\Models\Atraksi::with('images')->get();
    
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
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
  />
</head>
<body>
<!-- Navbar Mobile -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light d-lg-none p-0">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img
          src="./img/logo.png"
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
    class="offcanvas offcanvas-end d-lg-none"
    tabindex="-1"
    id="offcanvasNavbar"
    aria-labelledby="offcanvasNavbarLabel"
  >
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
      <button
        type="button"
        class="btn-close text-reset"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      ></button>
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
          src="logo.png"
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

  <!-- Carousel -->
  <div
    id="carouselExampleCaptions"
    class="carousel slide"
    data-bs-ride="carousel"
  >
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/empang1.jpg" class="d-block w-100" alt="Image 1" />
      </div>
      <div class="carousel-item">
        <img src="./img/fotbarrr.jpg" class="d-block w-100" alt="Image 2" />
      </div>
      <div class="carousel-item">
        <img src="./img/seoeda.jpg" class="d-block w-100" alt="Image 3" />
      </div>
    </div>
  </div>

  <!-- Atraksi -->
  <section class="atraksi" id="atraksi">
    <div class="container-atraksi container justify-content-center">
      <div class="row mt-5">
        <div class="col text-center">
          <p class="fw-bold fs-5">A T R A K S I</p>
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
                    <img src="{{ asset('/posts/'.$image->url) }}"   alt="Description of image"
                    class="img-fluid"
                    style="width: 180px; height: 220px">
                    </div>
                @endforeach
                
              </div>
            </div>
            <p class="deskripsi">
              {{ $item->description }}
            </p>
          </div>
          <p class="mt-3 fw-bold">{{$item->name}}</p>
        </div>
      </div>
       @endforeach

        <div class="col-6 col-md">
          <div class="card-atraksi text-center">
            <div class="foto">
              <div
                id="carouselPonyo1"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="./img/ponyo.jpeg"
                      alt="Description of image"
                      class="img-fluid"
                      style="width: 180px; height: 220px"
                    />
                  </div>
                  <div class="carousel-item active">
                    <img
                      src="./img/ikan.jpeg"
                      alt="Description of image"
                      class="img-fluid"
                      style="width: 180px; height: 220px"
                    />
                  </div>
                  <div class="carousel-item active">
                    <img
                      src="./img/bombastic.jpeg"
                      alt="Description of image"
                      class="img-fluid"
                      style="width: 180px; height: 220px"
                    />
                  </div>
                </div>
              </div>
              <p class="deskripsi">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Perferendis recusandae libero dolore repudiandae cupiditate
                quam illo aliquid dolores mollitia autem distinctio adipisci
                eveniet, minima quidem incidunt doloremque blanditiis harum?
                Dignissimos.
              </p>
            </div>
            <p class="mt-3 fw-bold">Ponyo</p>
          </div>
        </div>


        



        <div class="col-6 col-md">
          <div class="card-atraksi text-center">
            <div class="foto">
              <div
                id="carouselPonyo1"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="./img/ponyo.jpeg"
                      alt="Description of image"
                      class="img-fluid"
                      style="width: 180px; height: 220px"
                    />
                  </div>
                  <div class="carousel-item active">
                    <img
                      src="./img/ikan.jpeg"
                      alt="Description of image"
                      class="img-fluid"
                      style="width: 180px; height: 220px"
                    />
                  </div>
                  <div class="carousel-item active">
                    <img
                      src="./img/bombastic.jpeg"
                      alt="Description of image"
                      class="img-fluid"
                      style="width: 180px; height: 220px"
                    />
                  </div>
                </div>
              </div>
              <p class="deskripsi">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Perferendis recusandae libero dolore repudiandae cupiditate
                quam illo aliquid dolores mollitia autem distinctio adipisci
                eveniet, minima quidem incidunt doloremque blanditiis harum?
                Dignissimos.
              </p>
            </div>
            <p class="mt-3 fw-bold">Ponyo</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Swiper -->
  <section class="paket-wisata">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="card-group">
            <div class="col mt-2">
              <div class="card bg-light">
                <div
                id="carouselPonyo1"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/fotbarrr.jpg" class="card-img-top p-2 rounded-4" alt="Paket B">
                  </div>
                  <div class="carousel-item active">
                    <img src="./img/ikan.jpeg" class="card-img-top p-2 rounded-4" alt="Paket B">
                  </div>
                </div>
                </div>
                <div class="card-body text-center">
                  <h2 class="card-title">Paket B</h2>
                  <h5 class="card-subtitle mb-2 text-muted">Rp. 100.000/org</h5>
                  <p class="card-text">
                    <ul class="list-unstyled">
                      <li class="mb-2">2 Farm + edukasi</li>
                      <li class="mb-2">Pemandu wisata</li>
                      <li class="mb-2">Snack & Minum</li>
                      <li class="mb-2">Kenangan</li>
                      
                    </ul>
                  </p>
                  <!-- <a href="#" class="btn btn-primary mt-3">Detail</a> -->
                </div>
              </div>
            </div>
            </div>
          </div>
  
         <div class="swiper-slide">
            <div class="card-group">
            <div class="col mt-2">
              <div class="card bg-light">
                <div
                id="carouselPonyo1"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/fotbarrr.jpg" class="card-img-top p-2 rounded-4" alt="Paket B">
                  </div>
                  <div class="carousel-item active">
                    <img src="./img/ikan.jpeg" class="card-img-top p-2 rounded-4" alt="Paket B">
                  </div>
                </div>
                </div>
                <div class="card-body text-center">
                  <h2 class="card-title">Paket B</h2>
                  <h5 class="card-subtitle mb-2 text-muted">Rp. 100.000/org</h5>
                  <p class="card-text">
                    <ul class="list-unstyled">
                      <li class="mb-2">2 Farm + edukasi</li>
                      <li class="mb-2">Pemandu wisata</li>
                      <li class="mb-2">Snack & Minum</li>
                      <li class="mb-2">Kenangan</li>
                    </ul>
                  </p>
                  <!-- <a href="#" class="btn btn-primary mt-3">Detail</a> -->
                </div>
              </div>
            </div>
            </div>
          </div>
  
          <div class="swiper-slide">
            <div class="card-group">
            <div class="col mt-2">
              <div class="card bg-light">
                <div
                id="carouselPonyo1"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/fotbarrr.jpg" class="card-img-top p-2 rounded-4" alt="Paket B">
                  </div>
                  <div class="carousel-item active">
                    <img src="./img/ikan.jpeg" class="card-img-top p-2 rounded-4" alt="Paket B">
                  </div>
                </div>
                </div>
                <div class="card-body text-center">
                  <h2 class="card-title">Paket B</h2>
                  <h5 class="card-subtitle mb-2 text-muted">Rp. 100.000/org</h5>
                  <p class="card-text">
                    <ul class="list-unstyled">
                      <li class="mb-2">2 Farm + edukasi</li>
                      <li class="mb-2">Pemandu wisata</li>
                      <li class="mb-2">Snack & Minum</li>
                      <li class="mb-2">Kenangan</li>
                    </ul>
                  </p>
                  <!-- <a href="#" class="btn btn-primary mt-3">Detail</a> -->
                </div>
              </div>
            </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card-group">
            <div class="col mt-2">
              <div class="card bg-light">
                <div
                id="carouselPonyo1"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/fotbarrr.jpg" class="card-img-top p-2 rounded-4" alt="Paket B">
                  </div>
                  <div class="carousel-item active">
                    <img src="./img/ikan.jpeg" class="card-img-top p-2 rounded-4" alt="Paket B">
                  </div>
                </div>
                </div>
                <div class="card-body text-center">
                  <h2 class="card-title">Paket B</h2>
                  <h5 class="card-subtitle mb-2 text-muted">Rp. 100.000/org</h5>
                  <p class="card-text">
                    <ul class="list-unstyled">
                      <li class="mb-2">2 Farm + edukasi</li>
                      <li class="mb-2">Pemandu wisata</li>
                      <li class="mb-2">Snack & Minum</li>
                      <li class="mb-2">Kenangan</li>
                    </ul>
                  </p>
                  <!-- <a href="#" class="btn btn-primary mt-3">Detail</a> -->
                </div>
              </div>
            </div>
            </div>
          </div>
  
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-scrollbar"></div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 2,
      speed: 1000,
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
        },
      },
    });
  </script>
</body>
</html>
