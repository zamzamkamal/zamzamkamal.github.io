<?php
ob_start();
 include '../../inc/koneksi.php';

$KODE                     =$_POST['kode_obat'];
$NAMA                     =$_POST['nama_obat'];
$MERK                     =$_POST['merk'];
$SATUAN                   =$_POST['satuan'];
$HARGA                    =$_POST['harga_jual'];

if ($KODE=="" || $NAMA=="" || $MERK=="" || $SATUAN=="" || $HARGA=="" ) {


    echo"<script>

        alert('GAGAL');
    
        </script>";




    }else{
        $QUERY=mysqli_query($CONNECT,"INSERT INTO tb_obat SET
        kode_obat                 ='$KODE',
        nama_obat                 ='$NAMA',
        merk                      ='$MERK',
        satuan                    ='$SATUAN',
        harga_jual                ='$HARGA';")

        or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT) );



        }

    echo"<script>

        alert('BERHASIL ');
    
        </script>";





    header("location:?page=obat");



?>
