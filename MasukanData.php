<!DOCTYPE html>
<html>
	<head>
		<title> Metode GET </title>
	</head>
	<body>

		<form action="<?php $_SERVER['PHP_SELF']; ?>"> Nama
			<input type="text" name="nama" /> <br/>

			<input type="submit" value="OK">
		</form>
	<?php 
	if (isset($_GET['nama'])) {
		echo 'Hello, ' .$_GET['nama'];
	}



	 ?>

	</body>
</html>