<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nis = $_POST['nis'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$spp = $_POST['spp'];
$lks = $_POST['lks'];
$dll = $_POST['dll'];


mysqli_query($koneksi,"UPDATE pembayaran SET nis = '$nis' , 
                                    bulan = '$bulan' , 
                                    tahun = '$tahun' , 
                                    spp = '$spp' , 
                                    lks = '$lks' , 
                                    dll = '$dll'   
                                    WHERE id = $id");

header("location:Pembayaran.php");

?>