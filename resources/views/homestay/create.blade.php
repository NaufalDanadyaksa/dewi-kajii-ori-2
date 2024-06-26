@extends('layout')
<!-- START FORM -->
@section('content') 

<style>
    #name::placeholder,
    #description::placeholder {
        color: #fffff ; 
    }

</style>



<form action='{{ url('homestay') }}' method='POST' enctype="multipart/form-data" id="attractionForm">
@csrf
    
    <div class="form-group">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <input
          type="text"
          class="form-control text-black"
          placeholder="Nama Homestay"
          name='name' value="{{ old('name') }}" id="name"
          style="
            background-color: #d3d3d3;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
            border-radius: 6px;
          "
        />
      </div>

    <div class="form-group">
        <textarea type="text" class="form-control text-black p-3"
        placeholder="Deskripsi"
        name="description" id="description" style="background-color:
        #d3d3d3;text-decoration: none; opacity:1.0; box-shadow:none; border-radius: 6px;
        border:none; margin-top: 20px; margin-bottom: 20px;">{{ old('description') }}</textarea>
    </div>
    <div class="form-group">
        <input
          type="text"
          class="form-control text-black"
          placeholder="Lokasi"
          name='location' value="{{ old('location') }}" id="location"
          style="
            background-color: #d3d3d3;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
            margin-top:10px
            border-radius: 6px;
          "
        />
      </div>

    <div class="form-group" style="margin-top: 20px;">
    <input
      type="file"
      name="image[]" id="image" 
      multiple required class="form-control rounded-pill text-black"
      style=" display: none;"
    />
    <button type="button" onclick="document.getElementById('image').click()" class="btn text-white rounded-pill" style="background-color: #68687D; margin-top:10px; margin-bottom:10px; " id="chooseImageButton">Pilih Gambar</button>
    <div id="preview"></div>
    <small id="imageHelp" class="form-text text-muted">Pilih beberapa gambar dengan menekan tombol Ctrl/Cmd saat memilih.</small>
</div>

    <div class="row justify-content-end">
          <div class="col-auto">
          <a href="{{ url('homestay') }}" class="btn text-white rounded-pill py-2 px-3" style="background-color: #95959a;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Kembali</a>
            <button type="submit" name="submit" class="btn text-white rounded-pill py-2 px-3" style="background-color: #68687D;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Kirim</button>
          </div>
      </div>

</form>

<!-- AKHIR FORM --> 

<script>
    document.querySelectorAll('input[type="text"]').forEach(input => {
    input.addEventListener('input', function() {
        if (this.value.trim() !== '') {
            this.style.color = '#000000'; // Mengubah warna teks menjadi hitam
        } else {
            this.style.color = '#ffffffa0'; // Mengembalikan warna placeholder jika input kosong
        }
    });
});
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
@endsection

