<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Menampilkan Data Json</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<navbar class ="navbar bg-warning">
		<div class="container-fluid">	
			<a class="navbar-brand" href="">Daftar Nilai</a>
		</div>
	</navbar>
	<div class="container mt-5">
		<div class="col-2"></div>
		<div class="col-8">
			<table class="table table-striped">
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Tanggal Lahir</td>
					<td>Umur</td>
					<td>Alamat</td>
					<td>Kelas</td>
					<td>Nilai</td>
					<td>Hasil</td>
				</tr>
				<?php 
				$json_string = file_get_contents('data.json');
				$json = json_decode($json_string, true);
				
				$i= 1;
				foreach ($json as $data) {
					$lahir = new DateTime($data['tanggal_lahir']);
					$today = new DateTime();
					$umur = $today->diff($lahir);
					$nilai = $data['nilai'];

					//Perhitungan Nilai
					if ($nilai >= 80) {
					$hasil = "A";
					}elseif ($nilai >= 70) {
					$hasil = "B";
					}elseif ($nilai >= 60) {
					$hasil = "C";
					}else{
					$hasil = "D";
			

			
			 ?>
			 <tr>
		 	<td><?= $i++ . "."; ?></td>
		 	<td><?php echo $data['nama']; ?></td>
		 	<td><?= date_format(date_create($data['tanggal_lahir']),"d F Y"); ?></td>
		 	<td><?php echo $umur->y; ?></td>
		 	<td><?php echo $data['alamat']; ?></td>
		 	<td><?php echo $data['kelas']; ?></td>
		 	<td><?php echo $data['nilai']; ?></td>
		 	<td><?php echo $hasil; ?></td>
		 	
		 </tr>
		 <?php 	 ?>
			</table>
			
		</div>

	</div>

</body>
</html>