<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $nis = $_POST['nis'];
        $pelajaran = $_POST['pelajaran'];
        $semester = $_POST['semester'];
        $tahun = $_POST['tahun'];
        $u11 = $_POST['uh11'];
        $u21 = $_POST['uh21'];
        $u31 = $_POST['uh31'];
        $u41 = $_POST['uh41'];
        $u51 = $_POST['uh51'];
        $uts = $_POST['uts']; 
        $u12 = $_POST['uh12'];
        $u22 = $_POST['uh22'];
        $u32 = $_POST['uh32'];
        $u42 = $_POST['uh42'];
        $u52 = $_POST['uh52'];
        $uas = $_POST['uas'];
        $sql = "INSERT INTO nilai (nis,pelajaran,semester,tahun,uh11,uh21,uh31,uh41,uh51,uts,uh12,uh22,uh32,uh42,uh52,uas) 
                values ('$nis','$pelajaran','$semester','$tahun','$u11','$u21','$u31','$u41','$u51','$uts','$u12','$u22','$u32','$u42','$u52','$uas')";


        if (mysqli_query($koneksi,$sql)) {
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }
        header("location:Nilai.php");
    }
?>