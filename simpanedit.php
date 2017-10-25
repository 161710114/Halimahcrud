<?php
include ('koneksi.php');
$id 	= $_POST['id'];
$jurusan 	= $_POST['jurusan'];


$edit = "UPDATE jurusan SET jurusan='$jurusan' WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:lihatdata.php");
?>