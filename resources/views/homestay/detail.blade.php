<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: #063C48;
        }
        .homestay-pict{
            width: 400px;
            height: 300px;
            object-fit: cover;
        }

        .text-fill {
  color: aliceblue;
  font-size: 100px;
  font-family: 'Poppins', sans-serif;
  position: relative;
  margin-left: 140px;
}

.text-stroke {
  -webkit-text-stroke: 4px rgb(255, 255, 255);
  color: transparent;
}

@media (max-width: 768px) {
    .text-fill {
  color: aliceblue;
  font-size: 70px;
  font-family: 'Poppins', sans-serif;
  position: relative;
  margin-left: 110px;
}

.text-stroke {
  -webkit-text-stroke: 2px rgb(255, 255, 255);
  color: transparent;
}
}


    </style>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 position-relative order-lg-1 order-1 d-flex justify-content-center"> <!-- Urutan diubah untuk layar besar -->
            <img src="fotbarrr.jpg" alt="" class="homestay-pict d-flex justify-content-center">
            <div class="position-absolute top-0 end-0 start-50">
              <h1 class="text-fill">
                <span class="text-stroke">01</span>
              </h1>
            </div>
          </div>
          <div class="col-lg-4 order-lg-2 order-2"> <!-- Urutan diubah untuk layar besar -->
            <h1 class="text-white">Homestay 1</h1>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est veritatis voluptate saepe praesentium, eum earum explicabo voluptates reiciendis? Nisi et provident quis corrupti voluptate, excepturi sint dolor neque fugit voluptatum!</p> 
          </div>
        </div>
      </div>
      
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>