<?php  
require_once("configuration.php");
$id_pembeli = $_GET['id_pembeli'];

$sql_delete = "DELETE FROM pembeli WHERE id_pembeli = '$id_pembeli'";
mysqli_query($koneksi , $sql_delete);


header("Location:datapembeli.php");
?>