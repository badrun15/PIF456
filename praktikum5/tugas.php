<!DOCTYPE html>
<html>
<head>
	<title>Tugas</title>
</head>
<body>

<table border="1">
<form method="get">
<tr> <th> <a href="<?php $_SERVER['PHP_SELF']?>?by=nim">NIM</a></th>
<th><a href="<?php $_SERVER['PHP_SELF']?>?by=nama">Nama</a></a></th>
<th><a href="<?php $_SERVER['PHP_SELF']?>?by=alamat">Alamat</a></th></tr>

<?php
error_reporting(0);
require_once './koneksi.php';
$sql = "select * from mahasiswa limit 10";
	if ($_GET['by'] == "nim") $orderBy = "nim";
	else if ($_GET['by'] == "nama") $orderBy = "nama";
	else if ($_GET['by'] == "alamat") $orderBy = "alamat";
	else $orderBy = "nim";
	
$query = "SELECT * FROM mahasiswa ORDER BY ".$orderBy;
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
	{
	echo "<tr><td>".$data['nim']."</td><td>"
	.$data['nama']."</td><td>"
	.$data['alamat']."</td></tr>";
	}
?>
</table>
</body>
</html>