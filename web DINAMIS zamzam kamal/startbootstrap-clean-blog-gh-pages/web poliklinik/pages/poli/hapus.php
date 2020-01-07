<?php 
ob_start();
include '../inc/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_poliklinik WHERE kode_poli = '$_GET[kode_poli]'")

or die(mysqli_error($CONNECT));

header("location:?page=poli");


 ?>