<!DOCTYPE html>
<html>
	<head>
		<title>Fungsi prosedur</title>
	</head>
	<body>
		<?php 
		// contoh prosedur
		function do_print() {
			echo time();
		}
		do_print();

		echo '<br>';

		// contoh fungsi penjumlahan
		function jumlah($a, $b) {
			return ($a+$b);
		}
		echo jumlah(10, 10);
		?>
	</body>
</html>
