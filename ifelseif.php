<!DOCTYPE html>
<html>
	<head>
		<title> Seleksi if else if </title>
	</head>
	<body>
		<?php 
		$a= 5;
		$b= 5;

		if($a > $b) {
			echo 'a lebih besar dari b';
		}
		elseif ($a==$b) {
			echo 'a sama dengan b';
		}
		else {
			echo 'b lebih besar dari a';
		}
		?>
	</body>
</html>
