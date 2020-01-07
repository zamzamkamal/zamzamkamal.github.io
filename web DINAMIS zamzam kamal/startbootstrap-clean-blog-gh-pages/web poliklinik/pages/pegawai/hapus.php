<?php 

ob_start();
include '../inc/koneksi.php';

mysqli_query($CONNECT,"DELETE FROM tb_login WHERE nip = '$_GET[nip]'")

or die(mysqli_error($CONNECT));

mysqli_query($CONNECT,"DELETE FROM tb_pegawai WHERE nip = '$_GET[nip]'")

or die(mysqli_error($CONNECT));

header("location:?page=pegawai");


 ?>