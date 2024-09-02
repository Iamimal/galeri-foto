<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="home.php">Profile</a></li>
            <li><a href="album.php">Album</a></li>
            <li><a href="foto.php">Foto</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><p><?=$_SESSION['namalengkap']?></p></li>
        </ul>
    <!-- <div class="dropdown">
      <button class="dropbtn">Web Galeri Foto</button>
      <div class="dropdown-content">
        <a href="home.php">Dashboard</a>
        <a href="#">Profile</a>
        <a href="#">Data Foto</a>
        <a href="logout.php">logout</a>
      </div>
    </div> -->
</body>
</html>