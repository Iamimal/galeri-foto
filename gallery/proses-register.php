<?php

    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $namalengkap = $_POST['namalengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $sql = mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', '$namalengkap', '$email', '$alamat')") or die(mysqli_error($conn));

    header("location:login.php");

?>