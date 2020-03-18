<?php 
	include 'Koneksi.php';

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$prodi = $_POST['prodi'];
	$alamat = $_POST['alamat'];

	mysqli_query($koneksi,"insert into mahasiswa values('$nama','$nim','$prodi','$alamat')");

	header("location:tugas.php")
 ?>