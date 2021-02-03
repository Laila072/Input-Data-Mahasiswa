<?php 
    $koneksi = mysqli_connect("localhost", "root", "", "data_mahasiswa");

    if(mysqli_connect_error($koneksi))
    {
        echo "Koneksi Gagal ". mysqli_connect_error();
    }
?>