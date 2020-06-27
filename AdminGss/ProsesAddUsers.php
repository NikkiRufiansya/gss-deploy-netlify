<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $nis = $_POST['nis'];
        $Username = $_POST['username'];
        $Password = $_POST['password'];
       
        
        $sql = "INSERT INTO users (nis,username,password) values 
                ('$nis','$Username','$Password')";

                require_once('koneksi.php');

        if (mysqli_query($koneksi,$sql)) {
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }
        header("location:Users.php");
    }
?>