<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $kelas = $_POST['kelas'];
       
      

        $sql = "INSERT INTO kelas (kelas) values 
                ('$kelas')";

                require_once('koneksi.php');

        if (mysqli_query($koneksi,$sql)) {
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }
        header("location:Kelas.php");
    }
?>