<?php  
require_once("configuration.php");

$sql_get = "SELECT * FROM transaksi";
$query_tran = mysqli_query($koneksi, $sql_get);

$results = [];
while ($row = mysqli_fetch_assoc($query_tran)) {
	$results[] = $row;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Data Transaksi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bodytransaksi">
	<h2>Data Transaksi Pembeli Counter Xphone</h2>
	<table border="1 solid black" class="tabeltransaksi">
		<tr>
			<td>No</td>
			<td>ID Transaksi</td>
			<td>Tanggal Transaksi</td>
			<td>Jumlah Beli</td>
			<td>Harga Total</td>
			<td>Sistem Pembayaran</td>
			<td>ID Barang</td>
			<td>ID Pembeli</td>
			<td>Aksi</td>
		</tr>
		<?php  
		$no = 1;
		foreach ($results as $result) :
		?>
		<tr>
			<td><?= $no;  ?></td>
			<td><?= $result['id_transaksi'] ?></td>
			<td><?= $result['tgl_transaksi'] ?></td>
			<td><?= $result['jumlah_beli'] ?></td>
			<td><?= $result['harga_total'] ?></td>
			<td><?= $result['sistempembayaran'] ?></td>
			<td><?= $result['id_jual'] ?></td>
			<td><?= $result['id_pembeli'] ?></td>
			<td>
				<a href="ubahdatatransaksi.php?id_transaksi=<?= $result['id_transaksi']; ?>">Ubah</a>
				||
				<a href="hapusdatatransaksi.php?id_transaksi=<?= $result['id_transaksi']; ?>">Hapus</a>
			</td>
		</tr>
		<?php
		$no++;  
		endforeach;
		?>
	</table>
	<br><br>
	<center><button style="width: 180px; height: 70px; margin-top: 50px; ">
		<a href="tambahdatatransaksi.php" style="text-decoration: none; font-size: 15px; font-weight: bold;">Tambah Data</a></button></center>
</body>
</html>