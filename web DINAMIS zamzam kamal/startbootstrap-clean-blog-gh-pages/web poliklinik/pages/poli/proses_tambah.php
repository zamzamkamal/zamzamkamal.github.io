<?php
ob_start();
include '../../inc/koneksi.php';


$KODE                     =$_POST['kode_poli'];
$NAMA                     =$_POST['nama_poli'];

if ($KODE=="" || $NAMA=="" ) {


    echo"<script>

        alert('GAGAL');
    
        </script>";




    }else{
        $QUERY=mysqli_query($CONNECT,"INSERT INTO tb_poliklinik SET
        kode_poli                 ='$KODE',
        nama_poli                 ='$NAMA';")
        or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT) );



        }

    echo"<script>

        alert('BERHASIL ');
    
        </script>";





    header("location:../../admin/index.php?page=poli");



?>
