<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nis = $_POST['nis'];
$pelajaran = $_POST['pelajaran'];
$semester = $_POST['semester'];
$tahun = $_POST['tahun'];
$u11 = $_POST['uh11'];
$u21 = $_POST['uh21'];
$u31 = $_POST['uh31'];
$u41 = $_POST['uh41'];
$u51 = $_POST['uh51'];
$uts = $_POST['uts']; 
$u12 = $_POST['uh12'];
$u22 = $_POST['uh22'];
$u32 = $_POST['uh32'];
$u42 = $_POST['uh42'];
$u52 = $_POST['uh52'];
$uas = $_POST['uas'];

echo "$id<br>";
echo "$nis<br>";
echo "$pelajaran<br>";
echo "$semester<br>";
echo "$tahun<br>";
echo "$u11<br>";
echo "$u21<br>";
echo "$u31<br>";
echo "$u41<br>";
echo "$u51<br>";
echo "$uts<br>";
echo "$u12<br>";
echo "$u22<br>";
echo "$u32<br>";
echo "$u42<br>";
echo "$u52<br>";
echo "$uas<br>";
    $sql = "UPDATE nilai SET nis = '$nis' , 
    pelajaran = '$pelajaran' ,
    semester = '$semester' , 
    tahun = '$tahun' , 
    uh11 = '$u11' ,
    uh21 = '$u21' ,
    uh31 = '$u31' ,
    uh41 = '$u41' ,
    uh51 = '$u51' ,
    uts = '$uts' ,
    uh12 = '$u12' ,
    uh22 = '$u22' ,
    uh32 = '$u32' ,
    uh42 = '$u42' ,
    uh52 = '$u52' ,
    uas = '$uas' 
    WHERE id = $id";
    if (mysqli_query($koneksi,$sql)) {
        echo 'Berhasil';
    } else {
        echo 'Gagal';
    }
   // header("location:Absensi.php");

header("location:Nilai.php");

?>