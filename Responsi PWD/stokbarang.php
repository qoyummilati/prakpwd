<?php
include('configuration.php');

$query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
?>
<html>
    <head>
        <title></title>
    </head>
    <body style="background: linear-gradient(to right , #9FA5D5 ,#E8F5C8);">
           <center> <h2>Data Karyawan Counter Xphone</h2>
            <br>

        <center><a href="form_upload.php">Tambah Data Karyawan</a></center>
        <br>
        <center>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Foto Karyawan</th>
                <th>Nama Karyawan</th>
                <th>Aksi</th>

            </tr>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="image_view.php?id_gambar=<?php echo $row['id_gambar']; ?>" width="100"/></td>
                    <td><?php echo $row['keterangan']; ?></td>

                    <td>
                        
                        <a href="delete_gambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </center>
    </body>
</html>