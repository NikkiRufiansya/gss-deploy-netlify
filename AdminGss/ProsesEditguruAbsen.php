<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nip = $_POST['nip'];
$username = $_POST['username'];
$Password = $_POST['password'];

echo $id;
mysqli_query($koneksi,"UPDATE guruabsen SET nip = '$nip' , 
                                    username = '$username' , 
                                    password = '$Password' 
                                    
                                    WHERE id = $id");

header("location:guruAbsen.php");

?>