<!DOCTYPE HTML>
<html>
	<head>
		<title>Identifikasi Metode</title>
	</head>
	<body>
		<form ation="<?php $_SERVER['PHP_SELF'];?>" method="get">
			Nama <input type="text" name="nama" /><br/>
			<input type="submit" value="OK">
			<?php
			if (isset($_REQUEST['nama'])){
				echo 'Metode, ' . $_SERVER['REQUEST_METHOD'];
			}
			?>
		</form>
	</body>
</html>