<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data-Peserta-Vaksin.xls");
	?> 
<!DOCTYPE html>
<html>
<head>
	<title>Export Data Peserta Vaksin</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	
    <?php

?>
 
	
		<h1>Data Peserta Vaksin</h1>
	
 
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIK</th>
			<th>NAMA</th>
			<th>No.Telp</th>
            <th>Alamat</th>
		</tr>
		<?php 
		// koneksi database
		include_once("koneksi.php");
 
		// menampilkan data pegawai
        $result = mysqli_query($koneksi, "SELECT * FROM users");
		$no = 1;
		while($d = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nik']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['no_hp']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>