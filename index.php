<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Praktikum Pemrograman Berbasis Web</title>
	<style type='text/CSS'>
		body{background:#ECECEF; color:#333; font-family: 'Segoe UI', Tahoma, Helvetica, Sans-Serif; font-size:small; font-size-adjust:none; font-stretch:normal; font-style:normal; font-variant:normal; font-weight:normal; line-height:normal; max-width: 500px; margin:0 auto; padding:20px 10px;}
		H1{color:#2d89ef; line-height:26px; margin-bottom:10px;}
		H2{color:#44a3aa; line-height:20px; margin-bottom:30px;}
		H3{color:#b91d47; line-height:10px; margin-bottom:10px;}
		ul{margin:0; list-style:square;}
	</style>
</head>
<body>
	<h1>Praktikum Pemrograman Berbasis Web</h1>
	<h2>Muhammad Badrun | 110533430508 | S1 PTI B 2011</h2>
	<?php
		$x = 1;
		$y = 2;
		$z = 3;

		ECHO '<h3>Menampilkan Variabel</h3>';
		ECHO 'Nilai X adalah <strong>', $x, '</strong>, Nilai Y adalah <strong>', $y, '</strong>, Nilai Z adalah <strong>', $z, '</strong><br /><br />';

		ECHO '<h3>Operasi Matematika pada Variabel</h3>';
		ECHO '<ul>';
		ECHO '<li>Nilai X+Y adalah ', $x+$y, '</li>';
		ECHO '<li>Nilai X+Z adalah ', $x+$z, '</li>';
		ECHO '<li>Nilai Y+Z adalah ', $y+$z, '</li>';
		ECHO '</ul>';
		ECHO '<br />';

		ECHO '<h3>Kondisi</h3>';
		ECHO '<ul>';
		if($x > $y) {
			ECHO '<li>Nilai X lebih besar dari Y</li>';
		} else {
			ECHO '<li>Nilai Y lebih besar dari X</li>';
		}

		if($x > $z) {
			ECHO '<li>Nilai X lebih besar dari Z</li>';
		} else {
			ECHO '<li>Nilai Z lebih besar dari X</li>';
		}

		if($y > $z) {
			ECHO '<li>Nilai Y lebih besar dari Z</li>';
		} else {
			ECHO '<li>Nilai Z lebih besar dari Y</li>';
		}
		ECHO '</ul>';
		ECHO '<br />';

		ECHO '<h3>Percabangan</h3>';
		$a = 10;
		if($a > 1) {
			ECHO 'Nilai A lebih besar dari 1';
		}
		ECHO '<br />';

		ECHO '<h3>Perulangan</h3>';
		$i = 0;
		while($i < $x) {
			ECHO '*';
			$i++;
		}
		ECHO '<br />';

		$i = 0;
		while($i < $y) {
			ECHO '*';
			$i++;
		}
		ECHO '<br />';

		$i = 0;
		while($i < $z) {
			ECHO '*';
			$i++;
		}
		ECHO '<br />';

	?>
</body>
</html>