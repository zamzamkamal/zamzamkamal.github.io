<?php
ob_start();
include '../inc/koneksi.php';

$KODE                     =$_POST['kode_jadwal'];
$HARI                     =$_POST['hari'];
$JAM_MULAI                =$_POST['jam_mulai'];
$JAM_SELESAI              =$_POST['jam_selesai'];

if ($KODE=="" || $HARI=="" ||  $JAM_MULAI=="" ||  $JAM_SELESAI=="" ) {


    echo"<script>

        alert('GAGAL');
    
        </script>";




    }else{
        $QUERY=mysqli_query($CONNECT,"INSERT INTO tb_jadwal_praktik SET
        kode_jadwal          ='$KODE',
        hari                 ='$HARI',
        jam_mulai            ='$JAM_MULAI',
        jam_selesai          ='$JAM_SELESAI';")
        or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT) );



        }

    echo"<script>

        alert('BERHASIL ');
    
        </script>";





    header("location:?page=jadwal");



?>
