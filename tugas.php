<!DOCTYPE html>
<html>
<head>
	<title>tugas</title>
</head>
<body>
	<h1>Data Mahasiwa</h1>
	<h3>Menambahkan data mahasiswa</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>


	<h3>Menampilkan data mahasiswa</h3>
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
</body>
</html>