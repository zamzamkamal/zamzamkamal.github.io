<?php
ob_start();
include '../../inc/koneksi.php';

$KODE                     =$_POST['kode_jenis_biaya'];
$NAMA                     =$_POST['nama_biaya'];
$TARIF                    =$_POST['tarif'];

if ($KODE=="" || $NAMA=="" || $TARIF=="" ) {


    echo"<script>

        alert('GAGAL');
    
        </script>";




    }else{
        $QUERY=mysqli_query($CONNECT,"INSERT INTO tb_jenis_biaya SET
        kode_jenis_biaya          ='$KODE',
        nama_biaya                ='$NAMA',
        tarif                     ='$TARIF';")
        or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT) );



        }

    echo"<script>

        alert('BERHASIL ');
    
        </script>";





    header("location:../../admin/index.php?page=biaya");



?>
