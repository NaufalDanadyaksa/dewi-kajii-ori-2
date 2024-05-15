<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .background-container {
        position: relative;
        background-image: url('empang1.jpg'); /* Ganti dengan path gambar Anda */
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100vh;
    }

    
    .navbar {
      background-color: rgba(0, 0, 0, 0.5); /* Atur opacity sesuai kebutuhan */
    }
    
    .navbar-brand {
      color: white; /* Ganti warna teks agar sesuai dengan latar belakang */
    }
    
    .navbar-nav .nav-link {
      color: white; /* Ganti warna teks agar sesuai dengan latar belakang */
    }
    
    .offcanvas {
      background-color: rgba(0, 0, 0, 0.2); /* Atur opacity untuk offcanvas menu */
    }
    
    .content-container {
      background-color:#F1F1F1; /* Warna latar belakang konten */
      border-radius: 10px; /* Tambahkan border radius sesuai keinginan */
      padding: 20px; /* Tambahkan padding sesuai keinginan */
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk membuat konten menonjol */
      margin-top:50px   
    }

    body{
      background-color: #E7DACE;
    }

    .welcome-text h1{
      padding-top: 200px;
      font-size: 54px
    }
    </style>

    
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="https://via.placeholder.com/30" alt="Logo" class="d-inline-block align-top me-2">
          Desa Wisata Kajii
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dewi Kajii</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('/atraksi')}}">Atraksi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/homestay')}}">Homestay</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/wisata')}}">Paket Wisata</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/sejarah')}}">Sejarah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/berita')}}">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/ikan')}}">Katalog Ikan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/ulasan')}}">Ulasan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">Tambahkan Admin</a></li>
                </ul>
              </li>
            </ul>
            <div class="mt-auto">
              <a class="btn btn-danger" href="logout" role="button">Log Out</a>
            </div>
          </div>
        </div>
        </div>
        </nav>
        
        <div class="background-container">
            <div class="welcome-text ">
                <h1 class="text-white  ms-5">Selamat Datang <br>Admin Desa Wisata Kajii</br></h1>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>