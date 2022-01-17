<?php  
require_once("configuration.php");

if(isset($_POST['submit'])){
	$id_transaksi = $_POST['id_transaksi'];
	$tgl_transaksi = $_POST['tgl_transaksi'];
	$jumlah_beli = $_POST['jumlah_beli'];
	$harga_total = $_POST['harga_total'];
	$sistempembayaran = $_POST['sistempembayaran'];
	$id_jual = $_POST['id_jual'];
	$id_pembeli = $_POST['id_pembeli'];

	$sql_insert = "INSERT INTO transaksi VALUES('$id_transaksi','$tgl_transaksi','$jumlah_beli','$harga_total','$sistempembayaran','$id_jual','$id_pembeli')";
	mysqli_query($koneksi, $sql_insert);
	header("Location:datatransaksi.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Transaksi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bodytambahtransaksi">
	<h2>Tambah Data Transaksi</h2>
	<form action="tambahdatatransaksi.php" method="POST">
	<table class="tabeltambahdatatransaksi">
		<br><br>
		<tr>
			<td>ID Transaksi</td>
			<td>:</td>
			<td>
				<input type="text" name="id_transaksi">
			</td>
		</tr>
		<tr>
			<td>Tanggal Transaksi</td>
			<td>:</td>
			<td>
				<input type="text" name="tgl_transaksi">
			</td>
		</tr>
		<tr>
			<td>Jumlah Beli</td>
			<td>:</td>
			<td>
				<input type="number" name="jumlah_beli">
			</td>
		</tr>
		<tr>
			<td>Harga Total</td>
			<td>:</td>
			<td>
				<input type="number" name="harga_total">
			</td>
		</tr>
		<tr>
			<td>Sistem Pembayaran</td>
			<td>:</td>
			<td>
				<input type="text" name="sistempembayaran">
			</td>
		</tr>
		<tr>
			<td>ID Jual</td>
			<td>:</td>
			<td>
				<input type="text" name="id_jual">
			</td>
		</tr>
		<tr>
			<td>ID Pembeli</td>
			<td>:</td>
			<td>
				<input type="text" name="id_pembeli">
			</td>
		</tr>
	</table>
	<center>
		<button style="width: 180px; height: 70px; margin-top: 50px; " name="submit" type="submit">
		<a style="text-decoration: none; font-size: 15px; font-weight: bold;">Tambah Data</a></button>
	</center>
	</form>
</body>
</html>