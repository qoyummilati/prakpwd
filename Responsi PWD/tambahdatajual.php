<?php  
require_once("configuration.php");

if(isset($_POST['submit'])){
	$id_jual = $_POST['id_jual'];
	$nama_barang = $_POST['nama_barang'];
	$harga_barang = $_POST['harga_barang'];
	$stok = $_POST['stok'];

	$sql_insert = "INSERT INTO jual VALUES('$id_jual','$nama_barang','$harga_barang','$stok')";
	mysqli_query($koneksi , $sql_insert);
	header("Location:datajual.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Barang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: linear-gradient(to right , #9FA5D5 ,#E8F5C8);">
	<center><h2>Tambah Data Barang Tersedia Counter Xphone</h2></center>
	<form action="tambahdatajual.php" method="POST">
		<table style="margin: auto; font-family: new times roman; font-weight: bold; color: white; font-size: 20px;">
			<br><br>
			<tr>
				<td>ID Jual</td>
				<td>:</td>
				<td>
					<input type="text" name="id_jual">
				</td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td>
					<input autocomplete="off" type="text" name="nama_barang">
				</td>
			</tr>
			<tr>
				<td>Harga Barang</td>
				<td>:</td>
				<td>
					<input type="number" name="harga_barang">
				</td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td>
					<input type="number" name="stok">
				</td>
			</tr>
		</table>
		<center><button style="width: 180px; height: 70px; margin-top: 50px; " type="submit" name="submit"><a style="text-decoration: none; font-size: 15px; font-weight: bold;">Tambah Data</a></button></center>
	</form>
</body>
</html>