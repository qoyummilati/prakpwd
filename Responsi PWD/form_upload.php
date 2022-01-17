<?php 
include('configuration.php');


if(isset($_POST['tombol']))
{
    if(!isset($_FILES['gambar']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
        header("location:stokbarang.php");
    }
    else
    {
        $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $keterangan = $_POST['keterangan'];
            $ukuran_gambar = $_POST['tipe_gambar'];
            mysqli_query($koneksi,"insert into tb_gambar (gambar,nama_gambar,tipe_gambar,ukuran_gambar,keterangan) values ('$image','$file_name','$file_type','$file_size','$keterangan')");
            header("location:stokbarang.php");
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }

?>
<html>
    <head>
        <title></title>
    </head>
    <body style="background: linear-gradient(to right , #9FA5D5 ,#E8F5C8);">
        <form method="post" action="" enctype="multipart/form-data">
            <br><br>
       <center><table>
            <tr>
                <td>Foto Karyawan</td>
                <td><input type="file" name="gambar"/></td>
            </tr>
            <tr>
                <td>Nama Karyawan</td>
                <td><textarea name="keterangan"></textarea></td>
            </tr>
           
            <tr>
                <td></td>
                <td><input type="submit" name="tombol"/></td>
            </tr>
        </table>
    </center>
        </form>
    </body>
</html>