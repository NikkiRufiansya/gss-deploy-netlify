<?php


include 'koneksi.php';


if(isset($_POST["submit"])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $kode_pos = $_POST['kode_pos'];
    $no_handphone = $_POST['no_handphone'];
    $email = $_POST['email'];
    $nama_bank = $_POST['nama_bank'];
    $no_rekening = $_POST['no_rekening'];
    $nama_pemilik_rekening = $_POST['nama_pemilik_rekening'];
    if(is_array($_FILES)) {


        //SKCK
        $SKCK = $_FILES['SKCK']['tmp_name']; 
        $sourceProperties = getimagesize($SKCK);
        $newFileName = time();
        $dirPath = "FotoSKCK/";
        $ext = pathinfo($_FILES['SKCK']['name'], PATHINFO_EXTENSION);
        $imageType = $sourceProperties[2];
        $nameSKCK = "$newFileName"."_SKCK_$nama"."."."$ext";

        //KTP
        $KTP = $_FILES['KTP']['tmp_name']; 
        $sourceProperties1 = getimagesize($KTP);
        $newFileName1 = time();
        $dirPath1 = "FotoKTP/";
        $ext1 = pathinfo($_FILES['KTP']['name'], PATHINFO_EXTENSION);
        $imageType1 = $sourceProperties1[2];
        $nameKTP = "$newFileName1"."_KTP_$nama"."."."$ext1";


        //KK
        $KK = $_FILES['KK']['tmp_name']; 
        $sourceProperties2 = getimagesize($KK);
        $newFileName2 = time();
        $dirPath2 = "FotoKK/";
        $ext2 = pathinfo($_FILES['KK']['name'], PATHINFO_EXTENSION);
        $imageType2 = $sourceProperties1[2];
        $nameKK = "$newFileName2"."_KK_$nama"."."."$ext2";

        //NPWP
        $NPWP = $_FILES['NPWP']['tmp_name'];
        $sourceProperties3 = getimagesize($NPWP);
        $newFileName3 = time();
        $dirPath3 = "FotoNPWP/";
        $ext3 = pathinfo($_FILES['NPWP']['name'], PATHINFO_EXTENSION);
        $imageType3 = $sourceProperties3[2];
        $nameNPWP = "$newFileName3"."_NPWP_$nama"."."."$ext3";

        //SKCK
        switch ($imageType) {


            case IMAGETYPE_PNG:
            $imageSrc = imagecreatefrompng($SKCK); 
            $tmp = imageResize($imageSrc,$sourceProperties[0],$sourceProperties[1]);
            imagepng($tmp,$dirPath. $newFileName. "_SKCK_$nama.". $ext);
            break;           

            case IMAGETYPE_JPEG:
            $imageSrc = imagecreatefromjpeg($SKCK); 
            $tmp = imageResize($imageSrc,$sourceProperties[0],$sourceProperties[1]);
            imagejpeg($tmp,$dirPath. $newFileName. "_SKCK_$nama.". $ext);
            break;
            
            case IMAGETYPE_GIF:
            $imageSrc = imagecreatefromgif($SKCK); 
            $tmp = imageResize($imageSrc,$sourceProperties[0],$sourceProperties[1]);
            imagegif($tmp,$dirPath. $newFileName. "_SKCK_$nama.". $ext);
            break;

            default:
            echo "Invalid Image type.";
            exit;
            break;
        }

        //KTP
        switch ($imageType1) {
            case IMAGETYPE_PNG:
            $imageSrc1 = imagecreatefrompng($KTP); 
            $tmp1 = imageResize($imageSrc1,$sourceProperties1[0],$sourceProperties1[1]);
            imagepng($tmp1,$dirPath1. $newFileName1. "_KTP_$nama.". $ext1);
            break;           

            case IMAGETYPE_JPEG:
            $imageSrc1 = imagecreatefromjpeg($KTP); 
            $tmp1 = imageResize($imageSrc1,$sourceProperties1[0],$sourceProperties1[1]);
            imagejpeg($tmp1,$dirPath1. $newFileName1. "_KTP_$nama.". $ext1);
            break;
            
            case IMAGETYPE_GIF:
            $imageSrc1 = imagecreatefromgif($KTP); 
            $tmp1 = imageResize($imageSrc1,$sourceProperties1[0],$sourceProperties1[1]);
            imagegif($tmp1,$dirPath1. $newFileName1. "_KTP_$nama.". $ext1);
            break;

            default:
            echo "Invalid Image type.";
            exit;
            break;
        }

        //KK
        switch ($imageType2) {
            case IMAGETYPE_PNG:
            $imageSrc2 = imagecreatefrompng($KK); 
            $tmp2 = imageResize($imageSrc2,$sourceProperties2[0],$sourceProperties2[1]);
            imagepng($tmp2,$dirPath2. $newFileName2. "_KK_$nama.". $ext2);
            break;           

            case IMAGETYPE_JPEG:
            $imageSrc2 = imagecreatefromjpeg($KK); 
            $tmp2 = imageResize($imageSrc2,$sourceProperties2[0],$sourceProperties2[1]);
            imagejpeg($tmp2,$dirPath2. $newFileName2. "_KK_$nama.". $ext2);
            break;
            
            case IMAGETYPE_GIF:
            $imageSrc2 = imagecreatefromgif($KK); 
            $tmp2 = imageResize($imageSrc2,$sourceProperties2[0],$sourceProperties2[1]);
            imagegif($tmp2,$dirPath2. $newFileName2. "_KK_$nama.". $ext2);
            break;

            default:
            echo "Invalid Image type.";
            exit;
            break;
        }


        //NPWP
        switch ($imageType3) {
            case IMAGETYPE_PNG:
            $imageSrc3 = imagecreatefrompng($NPWP); 
            $tmp3 = imageResize($imageSrc3,$sourceProperties3[0],$sourceProperties3[1]);
            imagepng($tmp3,$dirPath3. $newFileName3. "_NPWP_$nama.". $ext3);
            break;           

            case IMAGETYPE_JPEG:
            $imageSrc3 = imagecreatefromjpeg($NPWP); 
            $tmp3 = imageResize($imageSrc2,$sourceProperties2[0],$sourceProperties2[1]);
            imagejpeg($tmp3,$dirPath3. $newFileName3. "_NPWP_$nama.". $ext3);
            break;
            
            case IMAGETYPE_GIF:
            $imageSrc3 = imagecreatefromgif($NPWP); 
            $tmp3 = imageResize($imageSrc3,$sourceProperties3[0],$sourceProperties3[1]);
            imagegif($tmp3,$dirPath3. $newFileName3. "_NPWP_$nama.". $ext3);
            break;

            default:
            echo "Invalid Image type.";
            exit;
            break;
        }


           
          
            $sql = "INSERT INTO pendaftaran_mitra (nama,
            alamat,kota,provinsi,kode_pos,no_handphone,email,nama_bank,no_rekening,nama_pemilik_rekening,foto_ktp,foto_kk,foto_npwp,foto_skck)
            VALUES('$nama', '$alamat','$kota','$provinsi','$kode_pos','$no_handphone','$email','$nama_bank','$no_rekening','$nama_pemilik_rekening','$nameKTP','$nameKK','$nameNPWP','$nameSKCK')";
            if(mysqli_query($koneksi,$sql) or die($koneksi)){
            echo 'Berhasil Menambahkan Data';
            }else{
            echo 'Gagal Menambahkan Data';
            }


          
        //}
         header("location:mitra.html");

    }
     
    


        header("location:mitra.html");
}








function imageResize($imageSrc,$imageWidth,$imageHeight) {

    $newImageWidth =1000;
    $newImageHeight =1000;

    $newImageLayer=imagecreatetruecolor($newImageWidth,$newImageHeight);
    imagecopyresampled($newImageLayer,$imageSrc,0,0,0,0,$newImageWidth,$newImageHeight,$imageWidth,$imageHeight);

    return $newImageLayer;
}
?>