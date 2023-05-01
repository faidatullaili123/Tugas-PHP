<?php 
//Volume Bangun Ruang Kubus
function VolumeKubus($Sisi){
	$Volume = $Sisi * $Sisi * $Sisi;
	return $Volume;
}
//Volume Bangun Ruang Balok
function VolumeBalok($Panjang, $Lebar, $Tinggi){
	$Volume= $Panjang * $Lebar * $Tinggi;
	return $Volume;
}
//Volume Bangun Ruang Tabung
function VolumeTabung($Jari2, $Tinggi_tabung){
	$phi = 3.14;
	$Volume = $phi * pow($Jari2, 2) * $Tinggi_tabung;
}
$Sisi 			= 6;
$Panjang 		= 8;
$Lebar 			= 5;
$Tinggi			= 9;
$Jari2			= 4;
$Tinggi_tabung 	= 5;

echo "1. Volume Kubus dengan Sisi $Sisi adalah : " . VolumeKubus($Sisi)."<br><br>";
echo "2. Volume Balok dengan Panjang= $Panjang, Lebar= $Lebar dan Tinggi= $Tinggi adalah : " . VolumeBalok($Panjang, $Lebar, $Tinggi). "<br><br>";
echo"3. Volume Tabung dengan Jari2 $Jari2 dan Tinggi $Tinggi_tabung adalah : ".VolumeTabung($Jari2, $Tinggi_tabung);

 ?>