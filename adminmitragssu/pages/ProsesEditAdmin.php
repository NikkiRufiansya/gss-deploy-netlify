<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

echo $id;
mysqli_query($koneksi,"UPDATE admin SET nama = '$nama' , 
                                    email = '$email' , 
                                    password = '$password' 
                                    
                                    WHERE id = $id");

header("location:Admin.php");

?>