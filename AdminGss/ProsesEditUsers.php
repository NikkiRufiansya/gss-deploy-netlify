<?php 

include 'koneksi.php';

$id = $_POST['id'];
$token = $_POST['token'];
$nis = $_POST['nis'];
$username = $_POST['username'];
$password = $_POST['password'];



mysqli_query($koneksi,"UPDATE users SET nis = '$nis' , token = '$token',
                                    username = '$username' , 
                                    password = '$password'  
                                    
                                    WHERE id = $id");

header("location:Users.php");

?>