<?php 

ob_start();
include 'koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_pemeriksaan WHERE kode_pemeriksaan ='$_GET[id]'")

or die(mysqli_error($CONNECT));



 ?>
 	<meta http-equiv="refresh" content="1; url=index.php?page=medis">