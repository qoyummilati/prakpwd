<?php  
require_once("configuration.php");

$id_transaksi = $_GET['id_transaksi'];

$sql_delete = "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'";
mysqli_query($koneksi, $sql_delete);

header("Location:datatransaksi.php");
?>
