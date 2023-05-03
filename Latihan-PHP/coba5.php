<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		table{width: 300px; text-align: center; margin: auto;}
		table th {background-color:blue }
		h2 {text-align: center; font-style: italic; font-weight: bold}
	</style>
</head>
<body>
	<form>
		<table border="1" cellspacing="0"><tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Kelas</th>
		</tr>
		<?php 
		  for ($no = 1, $i=10, $a=1; $i<=10, $a<=10  ; $i+=1, $a+=1) { ?>
 
			<tr>
				<td> <?php echo $no; ?></td>
				<td><?php echo "Nama ke $a"; ?></td>
				<td><?php echo "Kelas $a"; ?></td>
			</tr>
 
		<?php $no++; } ?>
		 
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
			
		</table>
	</form>

</body>
</html>