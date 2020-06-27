<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $nis = $_POST['nis'];
        $kelas = $_POST['kelas'];
        $semester = $_POST['semester'];
        $tahun = $_POST['tahun'];
        $bulan = $_POST['bulan'];
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['jam'];
        $status = $_POST['status'];

        $sql = "INSERT INTO absensi (nis,kelas,semester,tahun,bulan,tanggal,jam,status) values 
                ('$nis','$kelas','$semester','$tahun','$bulan','$tanggal','$jam','$status')";

                require_once('koneksi.php');

        if (mysqli_query($koneksi,$sql)) {
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }
        header("location:Absensi.php");
    }
?>