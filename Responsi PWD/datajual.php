<?php  
require_once("configuration.php");

$sql_get = "SELECT * FROM jual";
$query_tran = mysqli_query($koneksi, $sql_get);

$results = [];
while ($row = mysqli_fetch_assoc($query_tran)) {
	$results[] = $row;
}



?>
   <center> <h2>Data Barang Tersedia Counter Xphone</h2>
   	<br><br>
    <form action="" method="get">
        <label for="">Cari : </label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form></center>
<?php

$result = 0;
if (isset($_GET['cari']))
{
    $cari = $_GET['cari'];
    echo "<b> Hasil Pencarian : ".$cari."</b>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Data Barang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: linear-gradient(to right , #9FA5D5 ,#E8F5C8);">
	<table border="3 solid black" class="tabeldatajual">
		<tr>
			<td><center>No</center></td>
			<td>ID Barang</td>
			<td><center>Nama Barang</center></td>
			<td><center>Harga Barang</center></td>
			<td><center>Stok</center></td>
			<td><center>Aksi</center></td>
		</tr>
		<?php  
		$no = 1;
		foreach ($results as $result) :
		?>
		<tr>
			<td><?= $no;  ?></td>
			<td><?= $result['id_jual'] ?></td>
			<td><?= $result['nama_barang'] ?></td>
			<td><?= $result['harga_barang'] ?></td>
			<td><?= $result['stok'] ?></td>
	
			<td>
				<a href="hapusdatajual.php?id_jual=<?= $result['id_jual']; ?>">Hapus</a>
			</td>
		</tr>
		<?php
		$no++;  
		endforeach;
		?>
	</table>
	<center><button style=" width: 180px; height: 70px; margin-top: 50px;"><a href="tambahdatajual.php" style="text-decoration: none; font-size: 15px; font-weight: bold;">Tambah Data</a></button></center>
</body>
</html>