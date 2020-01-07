<?php 
ob_start();
include '../inc/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_pemeriksaan WHERE kode_pemeriksaan = '$_GET[kode_pemeriksaan]'")

or die(mysqli_error($CONNECT));

header("location:?page=periksa");


 ?>