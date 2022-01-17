
<?php  
require_once("configuration.php");

$sql_get = "SELECT * FROM pembeli";
$query_tran = mysqli_query($koneksi, $sql_get);

$results = [];
while ($row = mysqli_fetch_assoc($query_tran)) {
	$results[] = $row;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Data Pembeli</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: linear-gradient(to right , #9FA5D5 ,#E8F5C8);">
	<center><h2>Data Pembeli Counter Xphone</h2></center>
	<table border="3 solid black" class="tabeldatajual">
	<br><br>
		<tr>
			<td>
				<center>No</center>
			</td>
			<td>
				<center>ID Pembeli</center>
			</td>
			<td>
				<center>Nama Pembeli</center>
			</td>
			<td>
				<center>Aksi</center>
			</td>
		</tr>
		<?php  
		$no = 1;
		foreach ($results as $result) :
		?>
		<tr>
			<td><?= $no;  ?></td>
			<td><?= $result['id_pembeli'] ?></td>
			<td><?= $result['nama_pembeli'] ?></td>
			<td>
				<a href="hapusdatapembeli.php?id_pembeli=<?= $result['id_pembeli']; ?>">Hapus</a>
			</td>
		</tr>
		<?php
		$no++;  
		endforeach;
		?>
	</table>
	<center>
		<button style=" width: 180px; height: 70px; margin-top: 50px;"><a href="tambahdatapembeli.php" style="text-decoration: none; font-size: 15px; font-weight: bold;">Tambah Data</a></button>
	</center>
</body>
</html>