<?php 
ob_start();
include '../inc/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_pasien WHERE kode_pas = '$_GET[kode_pas]'")

or die(mysqli_error($CONNECT));

header("location:?page=pasien");


 ?>