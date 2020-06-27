<?php 

$koneksi = mysqli_connect("localhost","gitas423_fahrul","308731915089","gitas423_mitragssu");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>