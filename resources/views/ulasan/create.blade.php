<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #063C48;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }


    </style>
</head>
<body>
    <div class="container" id="container">
        <h1>Berikan Tanggapan Anda</h1>

        <div class="form-group">
            <input
              type="text"
              class="form-control text-white"
              placeholder="Username"
              name='name' value="" id="name"
            />
            <span class="placeholder"></span> 
        </div>

        <div class="form-group">
            <input
              type="text"
              class="form-control text-white"
              placeholder="Email"
              name='email' value="" id="email"
            />
            <span class="placeholder"></span> 
        </div>

        <div class="form-group">
            <input
              type="text"
              class="form-control text-white"
              placeholder="Tanggapan"
              name='description' value="" id="description"
              style="height: 90px;"
            />
            <span class="placeholder"></span> 
        </div>

        <button class="btn">Kirim</button>
    </div>
</body>
</html>
