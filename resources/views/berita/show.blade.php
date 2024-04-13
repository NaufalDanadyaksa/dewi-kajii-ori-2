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
<body style=" background-color: #FFE382;">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 order-md-1 order-2">
            <img src="{{ asset($berita->image) }}" class="img-card-homestay p-2 d-block w-100" alt="..." style="height: 12rem; border-radius: 10px;">
        </div>
        <div class="col-md-5 order-md-2 order-1 mt-3 mt-md-0">
            <div class="container rounded p-4" style="background-color: #68687D">
                <div class="text">
                    <h3 class="text-white">{{$berita->title}}</h3>
                    <p class="text-white">{{$berita->article}}</p>
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
