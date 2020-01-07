<?php
ob_start();
 include '../inc/koneksi.php';

$KODE                     =$_POST['kode_pas'];
$NAMA                     =$_POST['nama_pas'];
$ALAMAT                   =$_POST['alamat_pas'];
$TELEPON                  =$_POST['telp_pas'];
$TL                       =$_POST['tanggal_lahir_pas'];
$JK                       =$_POST['jenis_kelamin_pas'];
$TR                       =$_POST['tanggal_reg'];

if ($KODE=="" || $NAMA=="" || $ALAMAT=="" || $TELEPON=="" || $TL=="" || $JK=="" || $TR=="" ) {


    echo"<script>

        alert('GAGAL');
    
        </script>";




    }else{
        $QUERY=mysqli_query($CONNECT,"INSERT INTO tb_pasien SET
        kode_pas                 ='$KODE',
        nama_pas                 ='$NAMA',
        alamat_pas               ='$ALAMAT',
        telp_pas                 ='$TELEPON',
        tanggal_lahir_pas        ='$TL',
        jenis_kelamin_pas        ='$JK',
        tanggal_reg              ='$TR';")

        or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT) );



        }

    echo"<script>

        alert('BERHASIL ');
    
        </script>";





    header("location:?page=pasien");



?>
