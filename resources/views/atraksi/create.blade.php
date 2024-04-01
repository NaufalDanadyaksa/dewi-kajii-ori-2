@extends('layout')
<!-- START FORM -->
@section('content') 

<form action='{{ url('atraksi') }}' method='POST' enctype="multipart/form-data" id="attractionForm">
@csrf 
    <a href='{{ url('atraksi') }}' class="btn text-white" style="background-color: #948989;text-decoration: none; opacity:1.0; box-shadow:none; border:none">&lt;&lt; kembali</a>
    
    <div class="form-group">
        <label for="name">Nama Atraksi</label>
        <input
          type="text"
          class="form-control rounded-pill text-white"
          name='name' value="{{ old('name') }}" id="name"
          style="
            background-color: #886c6c;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
          "
        />
      </div>

    <div class="form-group">
        <label for="description">Deskripsi</label>
        <textarea type="text" class="form-control rounded-pill text-white p-3"
        name="description" id="description" style="background-color:
        #886c6c;text-decoration: none; opacity:1.0; box-shadow:none;
        border:none">{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
        <label for="image_input">Pilih Gambar:</label>
        <input
          type="file"
          name="image[]" id="image" 
          multiple required class="form-control rounded-pill text-white"
          style=" display: none;"
        />
        <button type="button" onclick="document.getElementById('image').click()" class="btn text-white rounded-pill" style="background-color: #886c6c;" id="chooseImageButton">Pilih Gambar</button>
        <div id="preview"></div>
        <small id="imageHelp" class="form-text text-muted">Pilih beberapa gambar dengan menekan tombol Ctrl/Cmd saat memilih.</small>
    </div>
      
    <div class="row justify-content-end">
          <div class="col-auto">
            <button type="submit" name="submit" class="btn text-white rounded-pill py-2 px-3" style="background-color: #948989;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Submit</button>
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
            button.innerText = 'X';
            button.type = 'button';
            button.classList.add('btn', 'btn-danger', 'rounded-circle', 'mb-2');
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
@endsection
