<?php
//koneksi database menggunakan file konfigurasi 
include_once("koneksi.php");

//Dapatkan nim dari URL untuk menghapus pengguna itu 
$nim = $_GET['nim'];

//Hapus baris pengguna dari tabel berdasarkan id yang diberikan 
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim=’$nim’");

//Setelah menghapus redirect ke Home, maka daftar pengguna terbaru akan ditampilkan
header("Location:index.php");
?>