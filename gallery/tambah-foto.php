<?php

include "koneksi.php";
session_start();

$judulfoto = $_POST['judulfoto'];
$deskripsifoto = $_POST['deskripsifoto'];
$tanggalunggah = date("y-m-d");
$userid = $_SESSION['userid'];
$albumid = $_POST['albumid']; 

$rand = rand();
$extensi = array('png','jpg','jpeg','gif');
$filename = $_FILES['lokasifile']['name'];
$ukuran = $_FILES['lokasifile']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$extensi)){
    header("location:foto.php");
} else{
    if($ukuran < 31457280){ 
        $xx = $rand. '_'.$filename;
        move_uploaded_file($_FILES['lokasifile']['tmp_name'], 'gambar/'.$rand. ''.$filename); // Changed 'top_name' to 'tmp_name'
        $sql = mysqli_query($conn, "INSERT INTO foto VALUES('','$judulfoto','$deskripsifoto','$tanggalunggah','$xx','$albumid','$userid')") or die(mysqli_error($conn));
        header("location:foto.php");
    } else{
        header("location:foto1.php");
    }
}

?>