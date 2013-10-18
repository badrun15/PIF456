<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Modul 2 | Studi Kasus 1</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Tempat Rekreasi Favorit 
		<select name="rekreasi">
			<option value="Batu" <?php if(isset($_POST['rekreasi']) && $_POST['rekreasi'] == 'Batu') echo 'selected="selected"'; ?>>Batu
			<option value="Bali" <?php if(isset($_POST['rekreasi']) && $_POST['rekreasi'] == 'Bali') echo 'selected="selected"'; ?>>Bali
			<option value="Raja Ampat" <?php if(isset($_POST['rekreasi']) && $_POST['rekreasi'] == 'Raja Ampat') echo 'selected="selected"'; ?>>Raja Ampat
			<option value="Lampung " <?php
				if(isset($_POST['rekreasi']) && $_POST['rekreasi'] == 'Lampung'){
					echo 'selected="selected"';
				}elseif(isset($_POST['rekreasi']) && $_POST['rekreasi'] != 'Lampung'){
					
				}
				else{
					echo 'selected="selected"';
				}
				?>>Lampung
			<option value="Vine" <?php if(isset($_POST['rekreasi']) && $_POST['rekreasi'] == 'Vine') echo 'selected="selected"'; ?>>Vine
			<option value="Path" <?php if(isset($_POST['rekreasi']) && $_POST['rekreasi'] == 'Path') echo 'selected="selected"'; ?>>Path
		</select> Preselectingnya adalah Lampung <br />
		<input type="submit" value="ok" />
	</form>

	<?php 
		if(isset($_POST['rekreasi'])){
			echo 'Tempat rekreasi favorit adalah ' . $_POST['rekreasi'];
		}
	?>
</body>
</html>