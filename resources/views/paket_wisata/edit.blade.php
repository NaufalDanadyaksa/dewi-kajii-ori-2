@extends('layout')

@section('content') 
<div class="container">
    <a href='{{ route('wisata.index') }}' class="btn text-white" style="background-color: #948989;text-decoration: none;
    opacity:1.0;
    box-shadow:none;
    border:none"><< kembali</a>

    <form action='{{ route('wisata.update', $wisata->id) }}' method='POST' enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Paket</label>
            <input
                type="text"
                class="form-control rounded-pill text-white"
                name='name' id="name"
                style="
                    background-color: #886c6c;
                    text-decoration: none;
                    opacity: 1;
                    box-shadow: none;
                    border: none;"
                value="{{ $wisata->name }}" required>
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" class="form-control rounded-pill text-white"
                name="price" id="price" style="background-color:
                #886c6c;text-decoration: none; opacity:1.0; box-shadow:none;
                border:none"
                value="{{ $wisata->price }}" required>
        </div>

        <div class="form-group">
            <label for="contents" class="form-label">Isi Paket Wisata</label>
            @foreach ($wisata->content as $content)
            <input type="text" class="form-control mt-2 rounded-pill text-white" id="contents1" name="contents[]" style="background-color:
            #886c6c;text-decoration: none; opacity:1.0; box-shadow:none;
            border:none" value="{{ $content->content }}" required>
            @endforeach
        </div>

        <div class="swiper paket_wisata  mt-5" style="height: 100%;">
            <div class="swiper-wrapper" style="display: flex; align-items: center;">
                @foreach($wisata->images as $image)
                <div class="swiper-slide" style="height: 500px;">
                    <img src="{{ asset('posts/paket_wisata/'.$image->url) }}" class="rounded mb-3 w-100 h-100" style="max-height: 300px;">
                    <!-- Tambahkan checkbox untuk menghapus gambar -->
                    <input type="checkbox" name="delete_image[]" value="{{ $image->id }}" class="form-check-input rounded-circle me-2">Hapus
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next" style="right: 10px; color: black;"></div>
            <div class="swiper-button-prev" style="left: 10px; color: black;"></div>
            <div class="swiper-scrollbar" style="background-color: rgb(166, 138, 76);"></div>
        </div>


        <div class="form-group">
            <label for="image_input">Pilih Gambar Baru:</label>
            <input
                type="file"
                name='new_image[]' multiple
                class="form-control rounded-pill text-white"
                style=" background-color: #886c6c;"
            />
            <small id="imageHelp" class="form-text text-muted"
                >Pilih beberapa gambar dengan menekan tombol Ctrl/Cmd saat
                memilih.</small
            >
        </div>

        <div class="row justify-content-end">
            <div class="col-auto">
                <button
                    type="submit"
                    name="submit"
                    class="btn text-white rounded-pill py-2 px-3"
                    style="background-color: #948989;text-decoration: none;
                    opacity:1.0;
                    box-shadow:none;
                    border:none"
                >
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".paket_wisata", {
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
