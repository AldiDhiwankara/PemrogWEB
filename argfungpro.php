<!DOCTYPE html>
<html>
	<head>
		<title> argumen fungsi </title>
	</head>
	<body>
		<?php 
		/**
		*mencetak string
		*$teks nilai string
		*$bold adalah argumen opsional
		*/
		function print_teks ($teks, $bold = true) {
			echo $bold ? '<b>' .$teks. '<b>' : $teks;
		}
		print_teks('Indonesia');
		print("<br>");
		print_teks('Indonesia', false);
		?>
	</body>
</html>