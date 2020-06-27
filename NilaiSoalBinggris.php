
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Nilai</title>
  </head>
  <body>
  	<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Nilai Anda</a>
</nav>
   	<?php
   	error_reporting(E_ALL & ~E_NOTICE);
	$soal1 = $_POST['soal1'];
	$soal2 = $_POST['soal2'];
	$soal3 = $_POST['soal3'];
	$soal4 = $_POST['soal4'];
	$soal5 = $_POST['soal5'];
	$soal6 = $_POST['soal6'];
	$soal7 = $_POST['soal7'];
	$soal8 = $_POST['soal8'];
	$soal9 = $_POST['soal9'];
	$soal10 = $_POST['soal10'];
	if ($soal1 == 'benar') {
		$nilaiSoal1 = 10;
	}else{
		$nilaiSoal1 = 0;
	}

	if ($soal2 == 'benar') {
		$nilaiSoal2 = 10;
	}else{
		$nilaiSoal2 = 0;
	}

	if ($soal3 == 'benar'){
		$nilaiSoal3 = 10;
	}else{
		$nilaiSoal3 = 0;
	}

	if ($soal4 == 'benar') {
		$nilaiSoal4 = 10;
	}else{
		$nilaiSoal4 = 0;
	}

	if ($soal5 == 'benar') {
		$nilaiSoal5 = 10;
	}else{
		$nilaiSoal5 = 0;
	}

	if ($soal6 == 'benar') {
		$nilaiSoal6 = 10;
	}else{
		$nilaiSoal6 = 0;
	}

	if ($soal7 == 'benar') {
		$nilaiSoal7 = 10;
	}else{
		$nilaiSoal7 = 0;
	}

	if ($soal8 == 'benar') {
		$nilaiSoal8 = 10;
	}else{
		$nilaiSoal8 = 0;
	}

	if ($soal9 == 'benar') {
		$nilaiSoal9 = 10;
	}else{
		$nilaiSoal9 = 0;
	}

	if ($soal10 == 'benar') {
		$nilaiSoal10 = 10;
	}else{
		$nilaiSoal10 = 0;
	}
	$totalNilai = $nilaiSoal1 + $nilaiSoal2 + $nilaiSoal3 + $nilaiSoal4 + $nilaiSoal5 + $nilaiSoal6 + $nilaiSoal7 + $nilaiSoal8 + $nilaiSoal9 + $nilaiSoal10;
	echo "<center><h2>Nilai<br></h2></center>";
	echo "<center><h1>$totalNilai</h2></center>";
?>
 <div class="card-footer">
 	<a href="SoalBinggris.php">
    <button type="submit" value="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-dot-circle-o"></i> kembali
    </button>
    </a>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>