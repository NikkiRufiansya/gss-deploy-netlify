<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $nama = $_POST['nama'];
        $url = $_POST['url'];
       
        $sql = "INSERT INTO image_slidder (nama,url) values 
                ('$nama','$url')";

                require_once('koneksi.php');

        if (mysqli_query($koneksi,$sql)) {
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }
        header("location:ImageSlider.php");
    }
?>