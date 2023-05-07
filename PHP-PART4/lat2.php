<?php 
//Memanggil file json
$json_string = file_get_contents('data.json');
//Merubah json menjadi array yang akan di looping 
$json = json_decode($json_string,true);

foreach ($json as $data) {
	echo $data["nama"] . ", Kelas : " . $data["kelas"];

	echo "<br>";
}
 ?>