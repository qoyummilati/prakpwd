<?php
include_once("koneksi.php"); //Koneksi database menggunakan file konfigurasi, load file koneksi.php

$result = mysqli_query($con, "SELECT * FROM mahasiswa "); //Mengambil semua data pengguna dari database mahasiswa, query untuk menampilkan semua data siswa
?>
<html>
<head> 
    <title>Halaman Utama</title> //judul halaman
</head>
<body>
    <h1>DATA MAHASISWA </h1>
    <a href="tambah.php">Tambah</a><br/><br/>
    <table width='80%' border=1>
    <tr>
        <th>Nim</th> 
        <th>Nama</th> 
        <th>Gender</th>
        <th>Alamat</th> 
        <th>tgl lahir</th> 
        <th>Update</th>
    </tr>
    
<?php 
while($user_data = mysqli_fetch_array($result)) { //Mengambil semua data dari hasil eksekusi result
    echo "<tr>";
    echo "<td>".$user_data['nim']."</td>";
    echo "<td>".$user_data['nama']."</td>";
    echo "<td>".$user_data['jkel']."</td>";
    echo "<td>".$user_data['alamat']."</td>"; 
    echo "<td>".$user_data['tgllhr']."</td>"; 
    echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a 
    href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>"; 
}
?>
</table>
</body>
</html>