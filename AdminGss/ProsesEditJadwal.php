<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nis = $_POST['nis'];
$semester = $_POST['semester'];
$tahun = $_POST['tahun'];
$hari = $_POST['hari'];
$nama_pelajaran = $_POST['nama_pelajaran'];
$jam = $_POST['jam'];
$guru = $_POST['guru'];

mysqli_query($koneksi,"UPDATE jadwal SET nis = '$nis' , 
                                    semester = '$semester' , 
                                    tahun = '$tahun' , 
                                    hari = '$hari' , 
                                    nama_pelajaran = '$nama_pelajaran' , 
                                    jam = '$jam' , 
                                    guru = '$guru' 
                                    WHERE id = $id");

header("location:Jadwal.php");

?>