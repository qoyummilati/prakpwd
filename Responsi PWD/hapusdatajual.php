<?php  
require_once("configuration.php");
$id_jual = $_GET['id_jual'];

$sql_delete = "DELETE FROM jual WHERE id_jual = '$id_jual'";
mysqli_query($koneksi , $sql_delete);


header("Location:datajual.php");
?>