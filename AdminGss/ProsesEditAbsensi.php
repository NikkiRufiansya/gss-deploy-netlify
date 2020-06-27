<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$semester = $_POST['semester'];
$tahun = $_POST['tahun'];
$bulan = $_POST['bulan'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$status = $_POST['status'];

mysqli_query($koneksi,"UPDATE absensi SET nis = '$nis' , 
                                    kelas = '$kelas',
                                    semester = '$semester' , 
                                    tahun = '$tahun' , 
                                    bulan = '$bulan' , 
                                    tanggal = '$tanggal' , 
                                    jam = '$jam' , 
                                    status = '$status' 
                                    WHERE id = $id");

header("location:Absensi.php");

?>