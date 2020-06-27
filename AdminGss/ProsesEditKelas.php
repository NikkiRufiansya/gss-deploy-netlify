<?php 

include 'koneksi.php';

$id = $_POST['id'];
$kelas = $_POST['kelas'];


echo $id;
mysqli_query($koneksi,"UPDATE kelas SET kelas = '$kelas' 
                                    
                                    
                                    WHERE id = $id");

header("location:Kelas.php");

?>