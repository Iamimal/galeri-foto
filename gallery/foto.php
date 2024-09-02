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
    <title>Halaman Foto</title>
</head>
<body>
    <?php include "navbar.php"; ?>
    <center>
    <h1>Halaman Foto</h1>
    <marquee>Selamat datang , <b><?=$_SESSION['namalengkap']?></b></marquee>
    <hr>

    <form action="tambah_foto.php" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td class="text">Judul</td>
          <td><input class="box" type="text" name="judulfoto" id="judulfoto" placeholder="Masukan Judul Foto" required></td>
        </tr>
        <tr>
          <td class="text">Deskripsi</td>
          <td><input class="box" type="text" name="deskripsifoto" id="deskripsifoto" placeholder="Masukan Deskripsi Foto" required></td>
        </tr>
        <tr>
          <td class="text">Foto</td>
          <td><input class="file" type="file" name="lokasifile" id="lokasifile" placeholder="Masukan Foto" required></td>
        </tr>
        <tr>
          <td class="text">Album</td>
          <td>
            <select name="albumid" id="albumid"  class="box">
              <option value=""  class="box">Pilih Album</option>
            <?php
            include "koneksi.php";
            $userid = $_SESSION['userid'];
            $sql = mysqli_query($conn, "SELECT * FROM album WHERE userid='$userid'");
            while($data = mysqli_fetch_array($sql)){
            ?>
              <option value="<?=$data['albumid']?>"  class="box"><?=$data['namaalbum']?></option>
            <?php }?>
            </select>
          </td>
        </tr>
        <tr>
          <td></td>
          <td><br><input type="submit" class="button" value="Simpan"></td>
        </tr>
      </table>
    </form>
    </center>
    <br>
    <hr>
    <br>
    <table width="300%" border="1" cellpadding="5" cellspacing="0" class="table">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Tanggal Unggah</th>
            <th>Lokasi File</th>
            <th>Album</th>
            <th>Disukai</th>
            <th>Aksi</th>
        </tr>
        <?php 
        include "koneksi.php";
        $userid = $_SESSION['userid'];
        $sql = mysqli_query($conn, "SELECT * FROM foto,album WHERE foto.userid='$userid' and foto.albumid=album.albumid");
        while($data = mysqli_fetch_array($sql)) {
        ?>
          <tr>
            <td align="center"><?=$data['fotoid']?></td>
            <td align="center"><?=$data['judulfoto']?></td>
            <td align="center"><?=$data['deskripsifoto']?></td>
            <td align="center"><?=$data['tanggaldiunggah']?></td>
            <td align="center"><img src="gambar/<?=$data['lokasifile']?>" width="200px"></td>
            <td align="center"><?=$data['namaalbum']?></td>
            <td align="center">
            
              <?php
              $fotoid = $data['fotoid'];
              $sql2 = mysqli_query($conn, "SELECT*FROM likefoto where fotoid='$fotoid'");
              echo mysqli_num_rows($sql2);
              ?>
            </td>
            <td align="center">
              <button class="button1"><a href="hapus-foto.php?fotoid=<?=$data['fotoid']?>">Hapus</a> </button>
              <button class="button"><a href="edit-foto.php?fotoid=<?=$data['fotoid']?>">Edit</a></button>
            </td>
          </tr>

        <?php }?>
    </table>
</body>
</html>
