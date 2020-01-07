<?php
ob_start();
include '../../inc/koneksi.php';

$KODE                     	=$_POST['kode_dok'];
$NAMA                     	=$_POST['nama_dok'];
$ALAMAT                    	=$_POST['alamat_dok'];
$TELEPON                    =$_POST['telp_dok'];
$POLI                    	=$_POST['poli'];
$JADWAL                    	=$_POST['jadwal'];

if ($KODE=="" || $NAMA=="" || $ALAMAT=="" || $TELEPON=="" || $POLI=="" || $JADWAL=="" ){


        echo"<script>

        alert('GAGAL');
    
        </script>";
	
}else{
	$QUERY = mysqli_query($CONNECT,"INSERT INTO tb_dokter SET 
            kode_dok 	='$KODE',
            nama_dok 	='$NAMA',
            alamat_dok	='$ALAMAT',
            telp_dok 	='$TELEPON',
            kode_poli 	='$POLI',
            kode_jadwal	='$JADWAL';") 
	        or die ('Gagal Memasukan Data Baru'.mysqli_error($CONNECT));

     }
        echo"<script>

        alert('BERHASIL ');
    
        </script>";

        header("location:?page=dokter");
?>        