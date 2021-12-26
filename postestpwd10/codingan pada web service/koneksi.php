<?php

$host="localhost";  //Nama pada host
$username="id18174141_mahasiswa"; //Username
$password="jIfc51I0<^0S&7Hq"; //Password atau kata sandi, bisa diisi jika menggunakan kata sandi
$databasename="id18174141_akademik"; // Sebuah database yg diberi nama akademin id18174141_akademik

//Membuat sebuah koneksi
$con=@mysqli_connect($host,$username,$password,$databasename);

//Mengecek sebuah koneksi
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}