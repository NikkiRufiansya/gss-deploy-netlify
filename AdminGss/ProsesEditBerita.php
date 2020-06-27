<?php 
	include 'koneksi.php';
		$id = $_POST['id'];
  		$gambar   = $_FILES['image']['name'];
        $nama = $_POST['nama'];
        $subjek = $_POST['subjek'];
        $image = $_POST['image'];  
        $teks = $_POST['teks'];
        $url = $_POST['url'];
		$lokasi_file = $_FILES['image']['tmp_name'];
		$nama_file = $_FILES['image']['name'];
		$isi  = $_POST['isi'];
        $urlteks = "http://gitasoft.id/AdminGss/lihatTeksBerita.php?nama=";
		
        $url1 = "$urlteks"."$nama";
        $urlfoto = "http://gitasoft.id/AdminGss/files/";
		$urlhasil = "$urlfoto"."$nama_file";
		$folder = "files/$nama_file";
  // Apabila gambar tidak diganti
  if (empty($gambar)){
    mysqli_query( $koneksi,"UPDATE berita SET nama = '$_POST[nama]',
                                    subjek = '$subjek',
                        			    image    = '$urlhasil',
                                        teks = '$_POST[teks]',
                                        url = '$url1'
                                     WHERE id = '$_POST[id]'");
  }else{
    if (move_uploaded_file($lokasi_file,"$folder")) {
    	echo "gambar : $gambar<br>";
    	$sql = "UPDATE berita SET nama='$nama',subjek = '$subjek',image = '$urlhasil' , teks = '$teks',url = '$url1', file='$nama_file' WHERE id='$id'";
    	if(mysqli_query($koneksi,$sql)){
			echo 'Berhasil Menambahkan Data';
			}else{
			echo 'Gagal Menambahkan Data';
			}

			//header("location:index.php");
    }
    
  }
  header('location:Berita.php');
?>