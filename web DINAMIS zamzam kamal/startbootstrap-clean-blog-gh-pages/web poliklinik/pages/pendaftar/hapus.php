<?php 
ob_start();
include '../inc/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_pendaftaran WHERE no_pendaftaran = '$_GET[no_pendaftaran]'")

or die(mysqli_error($CONNECT));

header("location:?page=pendaftar");


 ?>