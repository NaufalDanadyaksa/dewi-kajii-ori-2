@php
   $ikan = \App\Models\KatalogIkan::with('images')->get();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Desa Wisata Kajii</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Rozha+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
    .section1 .container3{
    
    background-color: #ffffff;
    width: 30%; 
    height: 200px;
    padding-bottom: 50px;
    margin-left: 20px;
    border-radius: 30px;
}

.judul-Katalog{
    font-family: 'Rozha one', serif;
}

.card-ikan{
    position: relative;
    display: inline-block;
}

.ikan-pict{
    width: 200px; 
    height: 250px; 
    border-radius: 20px;
    object-fit: cover;
}

.text-ikan-container{
    position: absolute; 
    bottom:5%; 
    left: 50%; 
    transform: translateX(-50%);
    background-color: rgba(255, 255, 255, 0.7); 
    padding: 10px; 
    width: 80%;
    border-radius: 10px; 
    
}

.nama-ikan{
    font-size: 20px; 
    font-weight: bold; 
    margin-top: 5px; 
    font-family: 'Poppins', sans-serif;
}

.harga-ikan{
    font-size: 15px; 
    font-weight: 100; 
    font-family: 'Poppins', sans-serif; 
    margin-top: -13px;
}

@media (max-width: 768px) {

.ikan-pict{
    width: 120px; 
    height: 170px; 
    border-radius: 20px;
    object-fit: cover;
}

.text-ikan-container{
    position: absolute; 
    bottom:5%; 
    left: 50%; 
    transform: translateX(-50%);
    background-color: rgba(255, 255, 255, 0.7); 
    padding: 10px; 
    width: 80%;
    border-radius: 10px; 
    
}

.nama-ikan{
    font-size: 12px; 
    font-weight: bold; 
    margin-top: 5px; 
}

.harga-ikan{
    font-size: 8px; 
    font-weight: 100; 
    margin-top: -13px;
}
}
    </style>
</head>
<body>
    <section class="Katalog-ikan mt-5">
        <div>
          <h1 class="judul-Katalog ms-3 mt-3">Katalog Ikan</h1>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="row row-cols-2 row-cols-md-4 d-flex justify-content-center">
                    @foreach ($ikan as $item)
                    <div class="col mb-4 d-flex justify-content-center">
                        @foreach($item->images as $image)
                        <div class="card-ikan">
                            <img src="{{ asset('/posts/katalog_ikan/'.$image->url) }}" alt="Description of image" class="ikan-pict">
                            <div class="text-ikan-container">
                                <p class="nama-ikan">{{ $item->name}}</p>
                                <h1 class="harga-ikan">{{ $item->price }}</h1>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
              </div>
            </div>
        </div>
    </section>

</body>
</html>