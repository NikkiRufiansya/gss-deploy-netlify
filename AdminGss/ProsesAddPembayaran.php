<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $nis = $_POST['nis'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $spp = $_POST['spp'];
        $lks = $_POST['lks'];
        $dll = $_POST['dll'];
        
        $sql = "INSERT INTO pembayaran (nis,bulan,tahun,spp,lks,dll) values 
                ('$nis','$bulan','$tahun','$spp','$lks','$dll')";

                require_once('koneksi.php');

        if (mysqli_query($koneksi,$sql)) {
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }
        header("location:Pembayaran.php");
    }
?>