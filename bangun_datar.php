<?php 

//Hitung Luas Persegi Panjang
function LuasPersegiPanjang($Panjang_PersegiPanjang, $Lebar_PersegiPanjang){
	$Luas  = $Panjang_PersegiPanjang * $Lebar_PersegiPanjang;
	return $Luas;
}
//Hitung Luas Persegi
function LuasPersegi($Sisi){
	$Luas  = $Sisi*$Sisi;
	return $Luas;
}
//Hitung Luas Segitiga
function LuasSegitiga($Alas, $Tinggi){
	$Luas = 0.5 * $Alas * $Tinggi;
	return $Luas;
}
//Hitung Luas Belah Ketupat
function LuasBelahKetupat ($d1, $d2){
	$Luas = 0.5 * $d1 * $d2;
	return $Luas;
}
//Hitung Luas Trapesium
function LuasTrapesium($a, $b, $t){
	$Luas = 0.5 * ($a + $b) * $t;
	return $Luas;
}
$Panjang_PersegiPanjang 	= 20;
$Lebar_PersegiPanjang		= 10;
$Sisi_Persegi 				= 15;
$Alas						= 12;
$Tinggi						= 8 ;
$d1							= 9 ;
$d2							= 7 ;
$a_Trapesium				= 10;
$b_Trapesium				= 11;
$t_Trapesium				= 9 ;


echo "1. Luas Persegi Panjang dengan Panjang $Panjang_PersegiPanjang & Lebar $Lebar_PersegiPanjang adalah : " . LuasPersegiPanjang($Panjang_PersegiPanjang, $Lebar_PersegiPanjang) . "<br><br>";
echo "2. Luas Persegi dengan Sisi $Sisi_Persegi adalah : " . LuasPersegi($Sisi_Persegi). "<br> <br>";
echo "3. Luas Segitiga dengan Alas $Alas dan Tinggi $Tinggi adalah : " . LuasSegitiga($Alas, $Tinggi). "<br> <br>" ;
echo "4. Luas Belah Ketupat dengan Diagonal1= $d1 dan Diagonal2= $d2 adalah : " . LuasBelahKetupat($d1, $d2). "<br><br>"; 
echo "5. Luas Trapesium dengan Sisi Atas =$a_Trapesium, Sisi Bawah = $b_Trapesium dan Tinggi = $t_Trapesium adalah : " . LuasTrapesium($a_Trapesium, $b_Trapesium, $t_Trapesium);

 ?>