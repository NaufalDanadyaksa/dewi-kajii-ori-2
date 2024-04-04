
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <style>
        .carousel-indicators {
            bottom: -50px;
        }
        .carousel-indicators li {
            border-radius: 50%;
            width: 10px;
            height: 10px;
            margin: 0 5px;
            background-color: black;
        }
        /* Tambahkan gaya untuk tombol prev dan next */
        .carousel-control-prev,
        .carousel-control-next {
            margin-left: -15px;
            margin-right: -15px;
            width: 30px;
            height: 30px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black; /* tambahkan warna hitam */
            top: calc(50% - 15px); /* menempatkan di tengah */
        }
        /* Gaya untuk ikon */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            color: black;
        }
        /* Gaya untuk foto */
        .carousel-item img {
            height: 400px; /* tinggi foto */
            object-fit: cover; /* agar foto tetap proporsional */
            border-radius: 20px;
        }

        /* Gaya untuk konten lainnya */
        @media (max-width: 576px) {
            .carousel,
            .carousel-inner,
            .carousel-item,
            .container {
                height: auto;
            }
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 order-md-1 order-2">
            <div id="carouselDetail" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($homestay->images as $index => $image)
                    <div class="carousel-item {{$index == 0 ? 'active' : ''}}">
                        <img src="{{ asset('/posts/homestay/'.$image->url) }}" class="img-card-homestay p-2 d-block w-100" alt="..." style="height: 12rem; border-radius: 10px;">
                    </div>
                    @endforeach
                </div>
                <ol class="carousel-indicators">
                    @foreach($homestay->images as $index => $image)
                    <li data-target="#carouselDetail" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active' : ''}}"></li>
                    @endforeach
                </ol>
                <a class="carousel-control-prev" href="#carouselDetail" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="ti ti-chevron-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselDetail" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="ti ti-chevron-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-5 order-md-2 order-1 mt-3 mt-md-0">
            <div class="container rounded p-4" style="background-color: #B37D7D;">
                <div class="text">
                    <h3>{{$homestay->name}}</h3>
                    <p>{{$homestay->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
