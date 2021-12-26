<?php //Mengaktifkan session PHP

require_once "koneksi.php"; //Menghubungkna ke database, halaman melakui file koneksi.php
$sql = "select * from mahasiswa WHERE nim='MHS08'"; //Menampilkan atau mengambil semua data berdasarkan nim dari table mahasiswa
$query = mysqli_query($con,$sql); //Parameter untuk menghubungkan data yang akanditampilkan dari database dan table mahasiswa
while ($row = mysqli_fetch_assoc($query)) { //Data disusun menjadi array
 $data[] = $row;
}
header('content-type: application/json'); //Merubah isi konten manjadi JSON
echo json_encode($data); //Pemanggilan data yang diambil dari database dengan ormat JSON
mysqli_close($con); //Menutup databse
//Mengakhiri session PHP
?>