<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menghitung Nilai BMI</title>
</head>
<body>
	<form method="post" action="">
		Nama	: <input type="text" name="nama"><br><br>
		Tinggi	: <input type="number" name="tinggi"><br><br>
		Berat	: <input type="number" name="berat"><br><br>
		<input type="submit" name="Hitung">
	</form>
	<?php 
	if (isset($_POST['nama']) && isset($_POST['tinggi']) && isset($_POST['berat'])) {
		$nama	= $_POST['nama'];
		$tinggi = $_POST['tinggi'] / 100;
		$berat  = $_POST['berat'];
		$bmi	= $berat / ($tinggi ** 2);

		if ($bmi<= 18.5) {
			$kategori="Kurus";
		} elseif ($bmi <= 25) {
			$kategori = "Sedang";
		} elseif ($bmi <= 29 ) {
			$kategori ="Gemuk";
		} else{
			$kategori="Obesitas";
		}
		echo "Halo Nama $nama. Nilai BMI anda adalah $bmi Anda Masuk Kategori ($kategori)";
	}
	 ?>

</body>
</html>