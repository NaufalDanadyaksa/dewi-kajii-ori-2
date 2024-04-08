  <!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - DEWI KAJII</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      /* Custom CSS */
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
        background-color: #FFE382;
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

  <div class="container-fluid mt-5">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <div class="content-container">
          
          @yield('content')
          <!-- Add your content here -->
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
document.getElementById('image').addEventListener('change', function(e) {
    var files = e.target.files;
    var preview = document.getElementById('preview');
    var chooseImageButton = document.getElementById('chooseImageButton');
    
    preview.innerHTML = '';
    
    if (files.length > 0) {
        chooseImageButton.style.display = 'none';
    } else {
        chooseImageButton.style.display = 'block';
    }
    
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();
        
        reader.onload = function(e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '200px';
            img.style.marginRight = '10px';
            
            var button = document.createElement('button');
            button.innerText = 'X';
            button.type = 'button';
            button.classList.add('btn', 'btn-dark', 'rounded-circle', 'mb-2');
            button.style.cursor = 'pointer';
            button.style.border = 'none';
            
            button.addEventListener('click', function() {
                preview.removeChild(div);
                if (preview.children.length === 0) {
                    chooseImageButton.style.display = 'block';
                }
            });
            
            var div = document.createElement('div');
            div.appendChild(img);
            div.appendChild(button);
            
            preview.appendChild(div);
        }
        
        reader.readAsDataURL(file);
    }
});
</script>
  </body>
  </html>
