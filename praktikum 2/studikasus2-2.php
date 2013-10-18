<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Modul 2 | Studi Kasus 2</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Tempat rekreasi yang sering di kunjungi 
		<input type="checkbox" name="rekreasi[]" value="Lampung" checked="checked" />Lampung
		<input type="checkbox" name="rekreasi[]" value="Raja Ampat" checked="checked" />Raja Ampat
		<input type="checkbox" name="rekreasi[]" value="Bali" />Bali
		<input type="checkbox" name="rekreasi[]" value="Tulungagung" checked="checked" />Tulungagung
		<input type="checkbox" name="rekreasi[]" value="Vine" />Vine
		<input type="checkbox" name="rekreasi[]" value="Path" />Path <br />
		Preselectingnya adalah lampung, Raia Ampat, dan Tulungagung <br />
		<input type="submit" value="ok" />
	</form>

	<?php
	// Ekstraksi nilai
		if(isset($_POST['rekreasi'])){
			foreach($_POST['rekreasi'] as $key => $val){
				echo $key . ' -> ' . $val . '<br />';
				if($val == 'Bali'){
					$check['Bali'] = 'checked="checked"';
				}
			}
		}
	?>
</body>
</html>