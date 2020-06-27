<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Mendapatkan Nilai Variable
	
		$nama = $_POST['nama'];
		$subjek = $_POST['subjek'];
		$tanggal = $_POST['tanggal'];
		$jam = $_POST['jam'];
		$waktu = "$tanggal"." / "."$jam";
        echo $nama;
        $tempat_foto = $_FILES['image']['tmp_name'];
		$nama_foto = $_FILES['image']['name'];
		$teks  = $_POST['teks'];
		$sourceProperties = getimagesize($tempat_foto);
		$imageType = $sourceProperties[2];
		$fileNewName = time();

		$urlteks = "http://gitasoft.id/AdminGss/lihatTeksInformasi.php?nama=";
		$url = "$urlteks"."$nama";
		$folder = "files/$nama_foto";
		$folderPath = "files/";
		$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

		$urlfoto = "http://gitasoft.id/AdminGss/files/";
		$urlhasil = "$urlfoto"."$fileNewName"."_thump"."."."$ext";
	
		$nameFIle = "$fileNewName"."."."$ext";
		echo "$nama_foto<br>";
		echo $tempat_foto.'/'.$nama_foto;
		
		//coding untuk compress image
		 $imageType = $sourceProperties[2];


        switch ($imageType) {


            case IMAGETYPE_PNG:
                $imageResourceId = imagecreatefrompng($tempat_foto); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagepng($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;


            case IMAGETYPE_GIF:
                $imageResourceId = imagecreatefromgif($tempat_foto); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagegif($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;


            case IMAGETYPE_JPEG:
                $imageResourceId = imagecreatefromjpeg($tempat_foto); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;


            default:
                echo "Invalid Image type.";
                exit;
                break;
        }
		
		//----------------------- 

		//Pembuatan Syntax SQL
		if (move_uploaded_file($tempat_foto, $folderPath. $fileNewName. ".". $ext)) {
			$sql = "INSERT INTO informasi (nama,subjek,waktu,image,teks,url,file) VALUES ('$nama','$subjek','$waktu','$urlhasil','$teks','$url','$nameFIle')";
				//ini untuk kirim notifikasi ke hp 
				$judul = rawurlencode($nama);
				echo "judul : $judul";
				$pesan = rawurlencode($subjek);
				$urlKirimNotif = file_get_contents("http://gitasoft.id/AdminGss/firebase/notif.php?topics=news&message=".$judul."&type=topics");
				
					if ($urlKirimNotif == "00") {
					echo "url tidak terkirim";


					
				} elseif ($urlKirimNotif == "01") {
					echo "url terikirim";
				}
				//------------------------------

				echo "$tempat_foto<br>";
				echo "$folderPath<br>";
				echo "$fileNewName<br>";
		//Import File Koneksi database
			require_once('koneksi.php');

			//Eksekusi Query database
			if(mysqli_query($koneksi,$sql)){
			echo 'Berhasil Menambahkan Data';
			}else{
			echo 'Gagal Menambahkan Data';
			}

			header("location:Informasi.php");

		}
		
	}
	function imageResize($imageResourceId,$width,$height) {


		$targetWidth =200;
		$targetHeight =200;
	
	
		$targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
		imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
	
	
		return $targetLayer;
	}
?>
