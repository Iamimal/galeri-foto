<?php
session_start();
if (!isset($_SESSION['userid'])) {
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon" />
    <title>Beranda - Gallery</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      
    </style>
  </head>
  <body>
    <?php include 'navbar.php'?>
    <!-- <div class="topsearchbar">
      <input type="text" placeholder="Search..." />
      <button type="button">Search</button>
    </div> -->
    <center>
    <h1>Selamat Datang Di Web Gallery</h1>
    <marquee>Halo, <strong><?= $_SESSION['namalengkap']?></strong> !</marquee>
    <hr>
    </center>
   


    

  </body>
</html>
