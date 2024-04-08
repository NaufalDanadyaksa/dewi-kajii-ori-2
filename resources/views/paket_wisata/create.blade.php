@extends('layout')

@section('content') 
<div class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ route('wisata.index') }}' class="btn btn-secondary"><< Kembali</a>

<body style="background-color: #FFF78A;">
    
        <form action='{{ route('wisata.store') }}' method='POST' enctype="multipart/form-data">
            @csrf 
            <div class="mb-3">
                <input
          type="text"
          class="form-control text-white"
          name='name' value="{{ old('name') }}" id="name"
          style="
            background-color: #d8eb8ae9;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
            border-radius: 6px;
            margin-bottom:10px;
            color: white;"
          placeholder="Nama Paket Wisata"
        />
            <div class="mb-3">
                <input type="number" class="form-control" id="price" name="price" required    style="
            background-color: #d8eb8ae9;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
            border-radius: 6px;
            margin-bottom:10px;
            color: white;"
          placeholder="Harga">
            </div>

            <div class="mb-3">
                <label for="contents" class="form-label">Isi Paket Wisata</label>
                <input type="text" class="form-control" id="contents" name="contents[]" required>
                <input type="text" class="form-control" id="contents" name="contents[]" required>
                <input type="text" class="form-control" id="contents" name="contents[]">
                <input type="text" class="form-control" id="contents" name="contents[]">
                <input type="text" class="form-control" id="contents" name="contents[]">

            </div>

<div class="form-group" style="margin-top: 20px;">
    <input
      type="file"
      name="image[]" id="image" 
      multiple required class="form-control rounded-pill text-white"
      style=" display: none;"
    />
    <button type="button" onclick="document.getElementById('image').click()" class="btn text-white rounded-pill" style="background-color: #76885B; margin-top:10px; margin-bottom:10px; " id="chooseImageButton">Pilih Gambar</button>
    <div id="preview"></div>
    <small id="imageHelp" class="form-text text-muted">Pilih beberapa gambar dengan menekan tombol Ctrl/Cmd saat memilih.</small>
</div>

    <div class="row justify-content-end">
          <div class="col-auto">
            <button type="submit" name="submit" class="btn text-white rounded-pill py-2 px-3" style="background-color: #76885B;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Submit</button>
          </div>
      </div>
</form>

<!-- AKHIR FORM --> 
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
            button.innerText = 'x';
            button.type = 'button';
            button.classList.add('btn', 'btn-danger', 'rounded-circle', 'mb-2');
            button.style.cursor = 'pointer';
            button.style.border = 'none';
            button.style.backgroundColor = '#000'; /* mengatur warna background tombol menjadi hitam */
            button.style.color = '#fff'; /* mengatur warna teks tombol menjadi putih */
            button.style.width = '20px'; /* mengatur lebar tombol */
            button.style.height = '20px'; /* mengatur tinggi tombol */
            button.style.padding = '0'; /* menghilangkan padding pada tombol */
            button.style.fontSize = '12px'; /* mengatur ukuran font teks tombol */
            
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
@endsection