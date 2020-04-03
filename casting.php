<!DOCTYPE html>
<html>
	<head>
		<title> Cek Casting </title>
	</head>
	<body>
		<?php 
			$str = '123abc';

			//Casting nilai variabel $str ke integer
			$bil = (int) $str;
			print_r($bil);

			print("<br>");

			echo gettype($str);
			
			print("<br>");

			echo gettype($bil);

		?>
	</body>
</html>