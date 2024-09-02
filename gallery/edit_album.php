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
    <title>Halaman Edit Album</title>
</head>
<body>
    <?php include "navbar.php" ?>
    <center>
    <h1>Halaman Edit Album</h1>
    <br>
    <marquee>Selamat datang <b><?=$_SESSION['namalengkap']?></b></marquee>
    <br>

    <form action="update_album.php" method="post">
        <?php
            include "koneksi.php";
            $albumid=$_GET['albumid'];
            $sql=mysqli_query($conn,"select * from album where albumid='$albumid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
        <table>
            <tr>
                <td class="text">Nama Album</td>
                <td><input class="box" type="text" name="namaalbum" value="<?=$data['namaalbum']?>" required></td>
            </tr>
            <tr>
                <td class="text">Deskripsi</td>
                <td><input class="box" type="text" name="deskripsi" value="<?=$data['deskripsi']?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><br><button class="button1"><a href="album.php">Kembali</a></button> | <input type="submit" class="button" value="Ubah"></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>
    </center>       
    
</body>
</html>
