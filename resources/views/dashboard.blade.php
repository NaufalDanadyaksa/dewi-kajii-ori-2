@extends('layout')

<style>
    .background-container {
    position: relative;
    background-image: url('empang1.jpg'); /* Ganti dengan path gambar Anda */
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100vh; /* Sesuaikan dengan kebutuhan Anda */
}

.welcome-text {
position: absolute;
top: 50%;
left: 20%;
transform: translate(-50%, -50%);
font-size: 3rem; /* Ubah ukuran font menjadi 3rem */
color: white;
font-family: Arial;
font-weight: bold;

}



</style>
<div class="background-container">
    <div class="welcome-text">
        <h1>Selamat Datang <br>Admin Dewi Kajii</br></h1>
    </div>
</div>

