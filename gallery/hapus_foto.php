<?php
    include "koneksi.php";
    session_start();

    $fotoid = $_GET['fotoid'];

    $sql = mysqli_query($conn,"DELETE FROM foto WHERE fotoid='$fotoid'")or die(mysqli_error($conn));

    header("location:foto.php");
?>