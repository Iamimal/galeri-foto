<?php
include "koneksi.php";
session_start();

$fotoid = $_POST['fotoid'];
$userid = $_SESSION['userid'];
$isikomentar = $_POST['isikomentar'];
$tanggalkomentar = date("Y-m-d");

$sql = mysqli_query($conn, "INSERT INTO komentafoto VALUES('','$fotoid','$userid','$isikomentar','$tanggalkomentar')")or die(mysqli_error($conn));

header("location:index.php");

?>