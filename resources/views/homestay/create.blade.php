@extends('layout')
<!-- START FORM -->
@section('content') 
<style>
    #name::placeholder,
    #description::placeholder,
    #location::placeholder{
        color: #ffffffa0 ;
        color: #ffffffa0 ;
    }
</style>


<form action='{{ url('homestay') }}' method='POST' enctype="multipart/form-data">
@csrf
<div class="row">
@csrf
<div class="row">
@csrf
<div class="row">
    <div class="col-sm-18">
        <input type="text" class="form-control text-white" name='name' value="{{ old('name') }}" id="name"   style="
            background-color: #68687D;
            background-color: #68687D;
            background-color: #68687D;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
            border-radius: 6px;
            margin-bottom:10px;"
           placeholder="Nama Homestay"
            margin-bottom:10px;"
           placeholder="Nama Homestay"
         />
    </div>
</div>
    <div class="row">
        <div class="col-sm-18">
            <textarea type="text" class="form-control text-white p-3"
            placeholder="Deskripsi"
            name="description" id="description" style="background-color:
            #68687D;text-decoration: none; opacity:1.0; box-shadow:none; border-radius: 6px;
            border:none; margin-bottom:10px;">{{ old('description') }}</textarea>
    </div>
    
    
    <div class="col-sm-18">
        <input type="text" class="form-control text-white" name='location' value="{{ old('location') }}" id="location"  
            <input type="text" class="form-control text-white" name='location' value="{{ old('location') }}" id="location"  
            <input type="text" class="form-control text-white" name='location' value="{{ old('location') }}" id="location"  
            style="
            background-color: #68687D;
            background-color: #68687D;
            background-color: #68687D;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
            border-radius: 6px;
            margin-bottom:10px;"
            margin-bottom:10px;"
          placeholder="Lokasi">
        </div>
          
    <div class="form-group" style="margin-top: 20px;">
    <input
      type="file"
      name="image[]" id="image" 
      multiple required class="form-control rounded-pill text-white"
      style=" display: none;"
    />
    <button type="button" onclick="document.getElementById('image').click()" class="btn text-white rounded-pill" style="background-color: #68687D;; margin-top:10px; margin-bottom:10px; " id="chooseImageButton">Pilih Gambar</button>
    <div id="preview"></div>
    <small id="imageHelp" class="form-text text-muted">Pilih beberapa gambar dengan menekan tombol Ctrl/Cmd saat memilih.</small>
</div>

    <div class="row justify-content-end">
          <div class="col-auto">
            <a href="{{ url('homestay') }}" class="btn text-white rounded-pill py-2 px-3" style="background-color: #95959a;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Kembali</a>
            <button type="submit" name="submit" class="btn text-white rounded-pill py-2 px-3" style="background-color: #68687D;;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Submit</button>
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
<!-- AKHIR FORM -->
@endsection