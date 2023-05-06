<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menampilkan Data Json</title>
	<style >
		table{
			margin: auto;
		}
		h2{
			background-color: grey;
			padding: 10;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="18" cellspacing="0" style="text-align-center">
		<tr>
			
			<td style="font-weight: bold;">Nama</td>
			<td style="font-weight: bold;">Tanggal Lahir</td>
			<td style="font-weight: bold;">Umur</td>
			<td style="font-weight: bold;">Alamat</td>
			<td style="font-weight: bold;">Kelas</td>
			<td style="font-weight: bold;">Nilai</td>
			<td style="font-weight: bold;">Hasil</td>
		</tr>
		<?php 
		$json_string = file_get_contents('data.json');
		$json = json_decode($json_string,true);

		foreach ($json as $data) {
			$lahir = new DateTime($data["tanggal_lahir"]);
			$today = new DateTime();
			$umur = $today->diff($lahir);
			$nilai = $data["nilai"];

			//Perhitungan Nilai
			if ($nilai <= 90) {
				$hasil = "A";
			}elseif ($nilai <= 80) {
				$hasil = "B";
			}elseif ($nilai <= 60) {
				$hasil = "C";
			}else{
				$hasil = "D";
			}

		}
		 ?>
		 <tr>
		 	<td><?php echo $data["nama"]; ?></td>
		 	<td><?php echo $data["tanggal_lahir"]; ?></td>
		 	<td><?php echo $umur->y; ?></td>
		 	<td><?php echo $data["alamat"]; ?></td>
		 	<td><?php echo $data["kelas"]; ?></td>
		 	<td><?php echo $data["nilai"]; ?></td>
		 	<td><?php echo $hasil; ?></td>
		 	
		 </tr>

		 <?php  ?>
	</table>

</body>
</html>