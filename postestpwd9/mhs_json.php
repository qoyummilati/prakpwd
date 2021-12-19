<?php //Berfungsi mengaktifkan season php

include "koneksi.php"; //Menghubungkan ke database dan menghubungkan dengan file koneksi.php
$sql="select * from mahasiswa order by nim"; //Menampilkan semua data berdasarkan NIM dari table mahasiswa
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) 
{
    $no=1;
    $response = array();
    $response["data"] = array();
    while ($r = mysqli_fetch_array($tampil)) //Akan menampilkan data yang diambil dari database
    {
        $h['nim'] = $r['nim'];
        $h['nama'] = $r['nama'];
        $h['jkel'] = $r['jkel'];
        $h['alamat'] = $r['alamat'];
        $h['tgllhr'] = $r['tgllhr'];
        $h['universitas'] = $r['universitas'];
        array_push($response["data"], $h); //Menambahkan aaray push otomatis sebanyak data yang ada
    }
    echo json_encode($response); //Mengubah format data menjadi JSON
}
else 
{
     $response["message"]="tidak ada data"; //Respon jika data tidak sesuai
     echo json_encode($response);
}
//Mengakhiri session PHP
?>
