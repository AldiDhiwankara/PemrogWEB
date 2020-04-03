<!DOCTYPE html>
<html>
	<head>
		<title> Data CheckBox</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> Jenis Hobby
			<input type="CheckBox" name="hobby[]" value="Membaca" />Membaca
			<input type="CheckBox" name="hobby[]" value="Olahraga" />Olahraga
			<input type="CheckBox" name="hobby[]" value="Menyanyi"/> Menyanyi <br>
			<input type="submit" name="OK" />
		</form>

	<?php 
	if(isset($_POST['hobby'])) {
		foreach($_POST['hobby'] as $key => $val) {
			echo $key. '->' .$val. '<br>';
		}
	}

	?>
	</body>
</html>