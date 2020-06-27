<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $Password = $_POST['password'];
        echo "$nip<br>";
        echo "$Password";
      

        $sql = "INSERT INTO admin (nama,nip,password) values 
                ('$nama','$nip','$Password')";

                require_once('koneksi.php');

        if (mysqli_query($koneksi,$sql)) {
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }
        header("location:Admin.php");
    }
?>