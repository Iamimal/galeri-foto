<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Landing</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        
    </style>
</head>
<body>
    
    <?php
    session_start();
    if(!isset($_SESSION['userid'])) { ?>
        <ul>
            <li><a href="login.php">Login</a></li>
        </ul>
        
        <?php 
    
} else {
    ?>
    <?php include "navbar.php" ?>   
    <?php 
    
} 
?>
    <center> 
    <h1>Halaman Utama</h1>
    <marquee>Selamat Datang Di Website Gallery</marquee>
    </center>
    <hr>
    <br> 
    <table class="table" width="800%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Uploader</th>
            <th>Jumlah Like</th>
            <th>aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $sql = mysqli_query($conn, "SELECT * FROM foto,user WHERE foto.userid=user.userid");
        while($data = mysqli_fetch_array($sql)) {
            
            ?>

            <tr>
                <th align="center"><?=$data['fotoid']?></th>
                <td align="center"><?=$data['judulfoto']?></td>
                <td align="center"><?=$data['deskripsifoto']?></td>
                <td align="center"><img src="gambar/<?=$data['lokasifile']?>" width="200px"></td>
                <td align="center"><?=$data['namalengkap']?></td>
                <td align="center">
                    <?php
                    $fotoid = $data['fotoid'];
                    $sql2 = mysqli_query($conn, "SELECT * FROM likefoto WHERE fotoid='$fotoid'");
                    echo mysqli_num_rows($sql2)
                    ?>
                </td>
                <td align="center">
                    <button class="buttonlike"><a href="like.php?fotoid=<?=$data['fotoid']?>">Like</a></button>
                    <button class="buttonkomentar"><a href="komentar.php?fotoid=<?=$data['fotoid']?>">Komentar</a></button>
                </td>
            </tr>

        <?php } ?>
    </table>
    


</body>
</html>