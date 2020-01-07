<?php 
$SERVER="localhost";
$USER="root";
$PASSWORD="";
$DATABASE="ict2_db_poliklinik";


 //mysqli_connect($SERVER,$USER,$PASSWORD) or die (mysqli_error()); 
$CONNECT=mysqli_connect($SERVER,$USER,$PASSWORD,$DATABASE) or die (mysqli_error());
//Cek Koneksi
if (mysqli_connect_error()) {
	echo "Koneksi Database gagal :".mysqli_connect_error();
}

 ?>