<?php

$url = "https://pwdqoyyum.000webhostapp.com/getdatamhs.php"; //untuk menghubungkan atau mengambil data dari halaman getdatamhs.php
$client = curl_init($url); //Memproses data dari $url
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client); //Menampilkan data dari $client yang telah diproses
$result = json_decode($response); //Pemanggilan data yang diambil dari database dengan format JSON
foreach ($result as $r) { //Format pada tampilan
 echo "<p>";
 echo "NIM : " . $r->nim . "<br />";
 echo "Nama : " . $r->nama . "<br />";
 echo "jenis kel : " . $r->jkel . "<br />";
 echo "Alamat : " . $r->alamat . "<br />";
 echo "Tgl Lahir : " . $r->tgllhr . "<br />";
 echo "</p>";
}