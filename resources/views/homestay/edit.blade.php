@extends('layout')

@section('content')

<form action='{{ route('homestay.update', $homestay->id) }}' method='post' enctype="multipart/form-data">
    @csrf 
    @method('PUT')
 
    <a href='{{ url('homestay') }}' class="btn text-white mb-4" style="background-color: #948989; text-decoration: none; opacity: 1.0; box-shadow: none; border: none"><< Kembali</a>

        <div class="form-group">
            <label for="name">Nama Homestay</label>
            <input type="text" class="form-control rounded-pill text-white" name='name' value="{{ $homestay->name }}" id="name" style="background-color: #886c6c; text-decoration: none; opacity: 1; box-shadow: none; border: none;" />
        </div>

        <div class="form-group">
            <label for="des">Deskripsi</label>
            <textarea type="text" class="form-control rounded-pill text-white p-3" name="description" id="description" style="background-color: #886c6c; text-decoration: none; opacity: 1.0; box-shadow: none; border: none">{{$homestay->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="location">Lokasi</label>
            <input type="text" class="form-control rounded-pill text-white" value="{{ $homestay->location }}" id="location" style="background-color: #886c6c; text-decoration: none; opacity: 1; box-shadow: none; border: none;" />
        </div>

        <!-- Tampilkan gambar-gambar atraksi yang ada -->
        <div class="swiper homestay mt-5" style="height: 100%;">
            <div class="swiper-wrapper" style="display: flex; align-items: center;">
                @foreach($homestay->images as $image)
                <div class="swiper-slide" style="height: 500px;">
                    <img src="{{ asset('posts/homestay/'.$image->url) }}" class="rounded mb-3 w-100 h-100" style="max-height: 300px;">
                    <!-- Tambahkan checkbox untuk menghapus gambar -->
                    <input type="checkbox" name="delete_image[]" value="{{ $image->id }}" class="form-check-input rounded-circle me-2">Hapus
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next" style="right: 10px; color: black;"></div>
            <div class="swiper-button-prev" style="left: 10px; color: black;"></div>
            <div class="swiper-scrollbar" style="background-color: rgb(166, 138, 76);"></div>
        </div>


        <!-- Tambahkan form upload untuk gambar baru -->
        <div class="form-group">
            <label for="new_image" class="col-sm-2 col-form-label">Upload Gambar Baru</label>
            <div class="col-sm-10">
                <input type="file" class="form-control rounded-pill text-white" name='new_image[]' multiple style="background-color: #886c6c;">
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="submit" name="submit" class="btn text-white rounded-pill py-2 px-3" style="background-color: #948989; text-decoration: none; opacity: 1.0; box-shadow: none; border: none">Submit</button>
            </div>
        </div>
        
    </div>
</form>
<!-- AKHIR FORM -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".homestay", {
        slidesPerView: 2,
        speed: 1000,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
            },
        },
    });
</script>
@endsection
