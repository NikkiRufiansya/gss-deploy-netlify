<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nip = $_POST['nip'];
$Nama = $_POST['nama'];
$Password = $_POST['password'];

echo $id;
mysqli_query($koneksi,"UPDATE admin SET nip = '$nip' , 
                                    nama = '$Nama' , 
                                    password = '$Password' 
                                    
                                    WHERE id = $id");

header("location:Admin.php");

?>