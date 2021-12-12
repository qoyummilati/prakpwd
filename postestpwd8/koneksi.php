<?php

$host="localhost";  //Nama pada host
$username="root"; //Username
$password=""; //Password atau kata sandi, bisa diisi jika menggunakan kata sandi
$databasename="akademik"; // Sebuah database yg diberi nama akademin akademik

//Membuat sebuah koneksi
$con=@mysqli_connect($host,$username,$password,$databasename);

//Mengecek sebuah koneksi
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}