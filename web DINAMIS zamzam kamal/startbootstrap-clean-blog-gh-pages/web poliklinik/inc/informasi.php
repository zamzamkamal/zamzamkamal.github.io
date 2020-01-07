<?php
include "koneksi.php";
$QUERY_INFO = mysqli_query($CONNECT, "SELECT * FROM tb_informasi");
$DATA_INFO = mysqli_fetch_array($QUERY_INFO);

?>