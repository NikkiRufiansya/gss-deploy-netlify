<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$url = $_POST['url'];


mysqli_query($koneksi,"UPDATE image_slidder SET nama = '$nama' , 
                                    url = '$url' 
                                     
                                    
                                    WHERE id = $id");

header("location:ImageSlider.php");

?>