<?php 
ob_start();
include '../inc/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_jenis_biaya WHERE kode_jenis_biaya = '$_GET[kode_jenis_biaya]'")

or die(mysqli_error($CONNECT));

header("location:?page=biaya");


 ?>