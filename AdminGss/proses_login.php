
<?php 
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nip = $_POST['nip'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where nip='$nip' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
var_dump($cek);
if($cek > 0){
	session_start();
	$_SESSION['nip'] = $nip;
	$_SESSION['status'] = "login";
	header("location:index.php");

}else{
header("location:login.php?pesan=gagal");
}
?>