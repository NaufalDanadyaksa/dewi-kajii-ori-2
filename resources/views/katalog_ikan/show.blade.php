<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Ikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
        .atraksi-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .atraksi-details {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .atraksi-title {
            font-size: 24px;
            color: #333333;
            margin-bottom: 10px;
        }
        .atraksi-description {
            font-size: 16px;
            color: #666666;
        }
        .btn-back {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="{{ route('ikan.index') }}" class="btn btn-secondary btn-back">&laquo; Kembali</a>
    
    <div class="row">
        <div class="col-md-6">
            @foreach($ikan->images as $image)
                <img src="{{ asset('/posts/katalog_ikan/'.$image->url) }}" class="atraksi-image" alt="Gambar Atraksi">
            @endforeach
        </div>
        <div class="col-md-6">
            <div class="atraksi-details">
                <h2 class="atraksi-title">{{ $ikan->name }}</h2>
                <h2 class="atraksi-title">{{$ikan->price}}</h2>
                <p class="atraksi-description">{{ $ikan->description }}</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
