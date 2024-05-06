@php
     $homestays = \App\Models\Homestay::get(); // Ambil semua homestay
   $selectedHomestay = $homestays->first(); 
  @endphp
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        body{
            background-color: #063C48;
        }
    </style>
  </head>
  <body>
  <!-- Navbar Mobile -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-light d-lg-none p-0">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img
        src="{{asset('element/logo.png')}}"
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
          src="{{asset('element/logo.png')}}"
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

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 position-relative order-lg-1 order-1 d-flex justify-content-center mt-5">
        @foreach($selectedHomestay->images as $image)
          <img src="{{ asset('/posts/homestay/'.$image->url) }}" alt="" class="homestay-pict-detail d-flex justify-content-center">
        @endforeach
      </div>
      <div class="col-lg-4 order-lg-2 order-2 mt-5">
        <h1 class="text-white">{{$selectedHomestay->name}}</h1>
        <p class="text-white">{{$selectedHomestay->description}}</p> 
      </div>
    </div>
  </div>
      
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>