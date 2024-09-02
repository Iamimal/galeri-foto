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
    <title>Halaman Komentar</title>
</head>
<body>
    <?php include "navbar.php"; ?>
    <center>
    <h1>Halaman Komentar</h1>
    <br>
    <marquee>Selamat datang <b><?=$_SESSION['namalengkap']?></b></marquee>
    <hr>
    <form action="tambah_komentar.php" method="post">
        <?php
            include "koneksi.php";
            $fotoid=$_GET['fotoid'];
            $sql=mysqli_query($conn,"select * from foto where fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="fotoid" value="<?=$data['fotoid']?>" hidden>
        <table>
            <tr>
                <td class="text">Judul</td>
                <td><input class="box" type="text" name="judulfoto" value="<?=$data['judulfoto']?>" readonly></td>
            </tr>
            <tr>
                <td class="text">Deskripsi</td>
                <td><textarea class="box" type="text" name="deskripsifoto"  readonly><?=$data['deskripsifoto']?></textarea></td>
            </tr>
            <tr>
                <td class="text">Foto</td>
                <td><img src="gambar/<?=$data['lokasifile']?>" width="200px" readonly></td>
            </tr>
            <tr>
                <td class="text">Komentar</td>
                <td><input class="box" type="text" name="isikomentar"></td>
            </tr>
            <tr>
                <td></td>
                <td><br><input class="button" type="submit" value="Tambah"> <button class="button1"><a href="index.php">Kembali</a></button></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>
    </center>
    <br>
    <hr>
    <br>
    <!-- <table class="table" width="100%" border="1" cellpadding=5 cellspacing=0>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Komentar</th>
            <th>Tanggal</th>
        </tr>
        <?php
           include "koneksi.php";
           $fotoid = $_GET['fotoid'];
           $sql = mysqli_query($conn, "SELECT * FROM komentafoto,user WHERE fotoid='$fotoid' and komentarfoto.userid=user.userid");
           while($data = mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?=$data['komentarid']?></td>
                <td><?=$data['namalengkap']?></td>
                <td><?=$data['isikomentar']?></td>
                <td><?=$data['tanggalkomentar']?></td>
            </tr>
        <?php
            }
        ?>
    </table> -->
    <br>
</body>
</html>
