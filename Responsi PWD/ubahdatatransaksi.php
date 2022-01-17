<?php  
require_once("configuration.php");
$id_transaksi = $_GET['id_transaksi'];
$sql_ubah = "SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'";

$query = mysqli_query($koneksi, $sql_ubah);
$result = mysqli_fetch_assoc($query);
if(isset($_POST['submit'])){
	$id_transaksi = $_POST['id_transaksi'];
	$tgl_transaksi = $_POST['tgl_transaksi'];
	$jumlah_beli = $_POST['jumlah_beli'];
	$harga_total = $_POST['harga_total'];
	$sistempembayaran = $_POST['sistempembayaran'];
	$id_jual = $_POST['id_jual'];
	$id_pembeli = $_POST['id_pembeli'];

	$sql_edit = "UPDATE transaksi SET tgl_transaksi = '$tgl_transaksi', jumlah_beli = '$jumlah_beli', harga_total = '$harga_total' , sistempembayaran = '$sistempembayaran' , id_jual = '$id_jual' , id_pembeli = '$id_pembeli' WHERE id_transaksi = '$id_transaksi'" ;
	mysqli_query($koneksi, $sql_edit);
	header("Location:datatransaksi.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Transaksi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bodyubahdatatransaksi">
	<center><h1>Ubah Transaksi</h1></center>
	<form action="ubahdatatransaksi.php" method="POST">
		<table class="tabelubahdatatransaksi">
			<tr>
				<td>ID Transaksi</td>
				<td>:</td>
				<td>
					<input type="text" name="id_transaksi" value="<?= $result['id_transaksi']; ?>">
				</td>
			</tr>
			<tr>
				<td>Tanggal Transaksi</td>
				<td>:</td>
				<td>
					<input type="text" name="tgl_transaksi" value="<?= $result['tgl_transaksi']; ?>">
				</td>
			</tr>
			<tr>
				<td>Jumlah Beli</td>
				<td>:</td>
				<td>
					<input type="number" name="jumlah_beli" value="<?= $result['jumlah_beli']; ?>">
				</td>
			</tr>
			<tr>
				<td>Harga Total</td>
				<td>:</td>
				<td>
					<input type="number" name="harga_total" value="<?= $result['harga_total']; ?>"> 
				</td>
			</tr>
			<tr>
				<td>Sistem Pembayaran</td>
				<td>:</td>
				<td>
					<input type="text" name="sistempembayaran" value="<?= $result['sistempembayaran']; ?>">
				</td>
			</tr>
			<tr>
				<td>ID Jual</td>
				<td>:</td>
				<td>
					<input type="text" name="id_jual" value="<?= $result['id_jual']; ?>">
				</td>
			</tr>
			<tr>
				<td>ID Pembeli</td>
				<td>:</td>
				<td>
					<input type="text" name="id_pembeli" value="<?= $result['id_pembeli']; ?>">
				</td>
			</tr>
		</table><br><br>
		<center><button type="submit" name="submit" style="width: 180px; height: 70px; margin-top: 50px;"><font style="font-family: arial; font-size: 19px; font-weight: bold;">Ubah Data</font></button></center>
	</form>
</body>
</html>