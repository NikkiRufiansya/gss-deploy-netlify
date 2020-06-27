<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $Password = $_POST['password'];
       

        $sql = "INSERT INTO admin (nama,email,password) values 
                ('$nama','$email','$Password')";

                require_once('koneksi.php');

        if (mysqli_query($koneksi,$sql)) {
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }
        header("location:Admin.php");
    }
?>