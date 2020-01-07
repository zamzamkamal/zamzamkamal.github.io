<?php
ob_start();
 include '../inc/koneksi.php';

$KODE                     =$_POST['kode_resep'];
$DOSIS                    =$_POST['dosis'];
$JUMLAH                   =$_POST['jumlah'];

if ($KODE=="" || $DOSIS=="" || $JUMLAH=="" ) {


    echo"<script>

        alert('GAGAL');
    
        </script>";




    }else{
        $QUERY=mysqli_query($CONNECT,"INSERT INTO tb_resep SET
        kode_resep                ='$KODE',
        dosis                     ='$DOSIS',
        JUMLAH                    ='$JUMLAH';")

        or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT) );



        }

    echo"<script>

        alert('BERHASIL ');
    
        </script>";





    header("location:?page=resep");



?>
