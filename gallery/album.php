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
    <title>Halaman Album</title>
</head>
<body>
    <?php include "navbar.php" ?>
    <center>
        <h1>Halaman Album</h1>
        <marquee>Selamat datang , <b><?=$_SESSION['namalengkap']?></b></marquee>
        <hr>
        <form action="tambah_album.php" method="post">
            <table>
            <tr>
                <td class="text">Nama Album</td>
                <td><input class="box" type="text" name="namaalbum" placeholder="Masukan Nama Album" required></td>
            </tr>
            <tr>
                <td class="text">Deskripsi</td>
                <td><input class="box"  type="text" name="deskripsi" placeholder="Masukan Deskripsi Album" required></td>
            </tr>
            <tr>
                <td></td>
                <td><br><input type="submit" class="button" value="Tambah"></td>
            </tr>
            </table>
        </form>
        <br>
    </center>
    <br>
    <hr>
    <br>
    <table class="table" border="1" width="100%" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal dibuat</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from album where userid='$userid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td align="center"><?=$data['albumid']?></td>
                    <td align="center"><?=$data['namaalbum']?></td>
                    <td align="center"><?=$data['deskripsi']?></td>
                    <td align="center"><?=$data['tanggaldibuat']?></td>
                    <td align="center">
                        <button class="button1"><a href="hapus_album.php?albumid=<?=$data['albumid']?>">Hapus</a></button>
                        <button class="button"><a href="edit_album.php?albumid=<?=$data['albumid']?>">Edit</a></button>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
