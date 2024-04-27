@php
$berita= \App\Models\Berita::get();
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


@media (max-width: 768px) {

}


    </style>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
          @foreach ($berita as $item)
          <div class="col-lg-5 position-relative order-lg-1 order-1 mt-2 d-flex justify-content-center"> <!-- Urutan diubah untuk layar besar -->
            <img src="{{ asset($item->image) }}" alt="" class="berita-pict-detail d-flex justify-content-center">
            <div class="position-absolute top-0 end-0 start-50">
              <h1 class="text-fill">
                <span class="text-stroke">01</span>
              </h1>
            </div>
          </div>
          <div class="col-lg-4 order-lg-2 order-2 mt-2"> <!-- Urutan diubah untuk layar besar -->
            <h1 class="text-white">{{ $item->title }}</h1>
            <p class="text-white">{{ $item->article }}</p> 
          </div>
          @endforeach
        </div>
      </div>
      
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>