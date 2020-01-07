<?php
@session_start();
include ('koneksi.php');
$USER  = addslashes($_POST['username']);
$PASS  = addslashes($_POST['password']);
$QUERY = mysqli_query($CONNECT,"SELECT * FROM `tb_login` WHERE `username` ='$USER' AND `password` = md5('$PASS')");

$HASIL = mysqli_num_rows($QUERY);
$DATA  = mysqli_fetch_array($QUERY); 

if ($HASIL==1) {
	$_SESSION['username'] =$DATA['username'];
	$_SESSION['type_user'] =$DATA['type_user'];
	if ($DATA['type_user']=="Admin") {header("location:../admin/index.php");}
    else if ($DATA['type_user']=="Pendaftar") {header("location:../pendaftar/index.php");}
    else if ($DATA['type_user']=="Dokter") {header("location:../dokter/index.php");}
    else if ($DATA['type_user']=="Kasir") {header("location:../kasir/index.php");}
    
    	echo('<div class="alert alert-success">
             <center>
            <strong>LOGIN BERHASIL</strong<br>
            Anda akan di redirect secara otomatis 
            </div>
            </center
            <meta http-equiv="refresh" content=2;>');
}else {
	echo('<div class="alert alert-danger">
            <strong>LOGIN GAGAL</strong<br>
            Tolong periksa username atau password anda!!! 
            </div>
            <meta http-equiv="refresh" content=2;>');
}    	


?>





