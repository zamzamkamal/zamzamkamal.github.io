<?php 
ob_start();
include '../inc/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_dokter WHERE kode_dok = '$_GET[kode_dok]'")

or die(mysqli_error($CONNECT));

header("location:?page=dokter");


 ?>