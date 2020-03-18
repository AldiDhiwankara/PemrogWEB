<!DOCTYPE html>
<html>
<head>
	<title>latihan 1</title>
</head>
<body>
	<h2>Menampilkan data mahasiswa</h2>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Prodi</th>
			<th>Alamat</th>
		</tr>
		<?php 
			include 'Koneksi.php';
			$no =1;
			$data = mysqli_query($koneksi,"select * from mahasiswa");
			while ($d =mysqli_fetch_array($data)) {
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['Nama']; ?></td>
					<td><?php echo $d['NIM']; ?></td>
					<td><?php echo $d['Prodi']; ?></td>
					<td><?php echo $d['Alamat']; ?></td>
				</tr>
				<?php
			}
		 ?>
	</table>
	<a href="tambah.php">+ tambah data mahasiswa</a>
</body>
</html>