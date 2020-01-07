<?php 
ob_start();
include '../inc/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_resep WHERE kode_resep = '$_GET[kode_resep]'")

or die(mysqli_error($CONNECT));

header("location:?page=resep");


 ?>