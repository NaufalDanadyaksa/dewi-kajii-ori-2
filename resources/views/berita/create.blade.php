@extends('layout')

@section('content')

<style>
    #title::placeholder,
    #article::placeholder {
        color: #ffffffa0 ;
    }
</style>

<form action='{{ url('berita') }}' method='POST' enctype="multipart/form-data">
    @csrf 
    <body style="background-color: #063C48;">
        
        <div>
            <div>
                <input type="text" class="form-control" name='title' value="{{ old('title') }}" id="title"
                    style="
                        background-color: #d3d3d3;
                        text-decoration: none;
                        opacity: 1;
                        box-shadow: none;
                        border: none;
                        border-radius: 6px;
                        margin-bottom:10px;
                        color: black;"
                    placeholder="Judul Berita">
            </div>
        </div>
        <div>
            <div>
                <textarea name="article" id="article" class="form-control"  style="
                    background-color: #d3d3d3;
                    text-decoration: none;
                    opacity: 1;
                    box-shadow: none;
                    border: none;
                    border-radius: 6px;
                    color: black;"
                    placeholder="Artikel">{{ old('article') }}</textarea>
            </div>
        </div>
        <div class="form-group" style="margin-top: 20px;">
            <input type="file" name="image" id="image" class="form-control rounded-pill text-white"
                style=" display: none;" />
            <button type="button" onclick="document.getElementById('image').click()"
                class="btn text-white rounded-pill" style="background-color: #68687D; margin-top:10px; margin-bottom:10px; "
                id="chooseImageButton">Pilih Gambar</button>
            <div id="preview"></div>
        </div>

        <div class="row justify-content-end">
            <div class="col-auto">
                <a href="{{ url('berita') }}" class="btn text-white rounded-pill py-2 px-3"
                    style="background-color: #95959a;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Kembali</a>
                <button type="submit" name="submit" class="btn text-white rounded-pill py-2 px-3"
                    style="background-color: #68687D;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Submit</button>
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

