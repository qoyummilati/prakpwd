<?php  
require_once("configuration.php");

if(isset($_POST['submit'])){
	$id_pembeli = $_POST['id_pembeli'];
	$nama_pembeli = $_POST['nama_pembeli'];

	$sql_insert = "INSERT INTO pembeli VALUES('$id_pembeli','$nama_pembeli')";
	mysqli_query($koneksi , $sql_insert);
	header("Location:datapembeli.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pembeli</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: linear-gradient(to right , #9FA5D5 ,#E8F5C8);">
	<center><h2>Tambah Data Pembeli Counter Xphone</h2></center>
	<form action="tambahdatapembeli.php" method="POST">
		<table style="margin: auto; font-family: new times roman; font-weight: bold; color: white; font-size: 20px;">
			<br><br><tr>
				<td>ID Pembeli</td>
				<td>:</td>
				<td>
					<input type="text" name="id_pembeli">
				</td>
			</tr>
			<tr>
				<td>Nama Pembeli</td>
				<td>:</td>
				<td>
					<input type="text" name="nama_pembeli">
				</td>
			</tr>
		</table>
		<center><button style="width: 180px; height: 70px; margin-top: 50px; " type="submit" name="submit"><a style="text-decoration: none; font-size: 15px; font-weight: bold;">Tambah Data Pembeli</a></button></center>
	</form>
</body>
</html>


