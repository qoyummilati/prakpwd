<?php //Mengaktifkan session PHP

    include "koneksi.php"; //Menghubungkan ke database dan menghubungkan dengan file koneksi.php
    header('Content-Type: text/xml'); //Header file XML
    $query = "SELECT * FROM mahasiswa"; //Menampilkan semua data berdasarkan NIM dari table mahasiswa
    $hasil = mysqli_query($con,$query);
    $jumField = mysqli_num_fields($hasil); //Berfungsi mengembalikan jumlah bidang dalam kumpulan hasil
echo "<?xml version='1.0'?>"; //Menggunakan XML versi 1.0
echo "<data>"; //Tag pembuka
    while ($data = mysqli_fetch_array($hasil)) //Akan menampilkan data yang diambil dari database
    {
     echo "<mahasiswa>";
     echo"<nim>",$data['nim'],"</nim>";
     echo"<nama>",$data['nama'],"</nama>";
     echo"<jkel>",$data['jkel'],"</jkel>";
     echo"<alamat>",$data['alamat'],"</alamat>";
     echo"<tgllhr>",$data['tgllhr'],"</tgllhr>";
     echo"<universitas>",$data['universitas'],"</universitas>";
     echo "</mahasiswa>";
    }
echo "</data>"; //Tag penutup
//Mengakhiri session PHP
?>