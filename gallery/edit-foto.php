<?php
session_start();
if(!isset($_SESSION['userid'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Edit Foto</title>
</head>
<body>
    <?php include "navbar.php" ?>
    <center>
        <h1>Halaman Edit Foto</h1>
        <marquee>Selamat datang , <b><?=$_SESSION['namalengkap']?></b></marquee>
        <hr>
        <form action="update_foto.php" method="post" enctype="multipart/form-data">
            <?php
            include "koneksi.php";
            $fotoid =$_GET['fotoid'];
            $sql = mysqli_query($conn, "SELECT * FROM foto WHERE fotoid='$fotoid'");
            while($data = mysqli_fetch_array($sql)){

                ?>
            <input type="text" name="fotoid" value="<?=$data['fotoid']?>" hidden>
            <table>
                <tr>
                    <td class="text">Judul</td>
                    <td><input class="box" type="text" name="judulfoto" id="judulfoto" value="<?=$data['judulfoto']?>"></td>
                </tr>
                <tr>
                    <td class="text">Deskripsi</td>
                    <td><input class="box" type="text" name="deskripsifoto" id="deskripsifoto" value="<?=$data['deskripsifoto']?>"></td>
                </tr>
                <tr>
                    <td class="text">Foto</td>
                    <td><input class="box" type="file" name="lokasifile" id="lokasifile"></td>
                </tr>
                <tr>
                    <td class="text">Foto</td>
                    <td><img src="gambar/<?=$data['lokasifile']?>" width="200px" height="60%"></td>
                </tr>
                <tr>
                    <td class="text">Album</td>
                    <td>
                        <select name="albumid">
                            
                            <?php
                                $userid = $_SESSION['userid'];
                                $sql2 = mysqli_query($conn, "SELECT * FROM album WHERE userid='$userid'");
                                while($data2 = mysqli_fetch_array($sql2)){

                            ?>
                                <option value="<?=$data2['albumid']?>" <?php if($data2['albumid']==$data2['albumid']){echo 'selected';}?>><?=$data2['namaalbum']?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Ubah"><button><a href="foto.php">Kembali</a></button></td>
                </tr>
            </table>
            <?php } ?>

        </form>
    </center>

</body>
</html>