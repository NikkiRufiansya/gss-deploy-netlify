<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $nip = $_POST['nip'];
        $username = $_POST['username'];
        $Password = $_POST['password'];
        echo "$nip<br>";
        echo "$Password";
      

        $sql = "INSERT INTO guruabsen (nip,username,password) values 
                ('$nip','$username','$Password')";

                require_once('koneksi.php');

        if (mysqli_query($koneksi,$sql)) {
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }
        header("location:guruAbsen.php");
    }
?>