<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $nis = $_POST['nis'];
        $semester = $_POST['semester'];
        $tahun = $_POST['tahun'];
        $hari = $_POST['hari'];
        $nama_pelajaran = $_POST['nama_pelajaran'];
        $jam = $_POST['jam'];
        $guru = $_POST['guru'];

        $sql = "INSERT INTO jadwal (nis,semester,tahun,hari,nama_pelajaran,jam,guru) values 
                ('$nis','$semester','$tahun','$hari','$nama_pelajaran','$jam','$guru')";

                require_once('koneksi.php');

        if (mysqli_query($koneksi,$sql)) {
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }
        header("location:Jadwal.php");
    }
?>