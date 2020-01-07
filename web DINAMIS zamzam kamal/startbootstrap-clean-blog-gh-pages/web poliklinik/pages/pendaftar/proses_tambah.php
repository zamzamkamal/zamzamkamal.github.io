<?php
ob_start();
include '../../inc/koneksi.php';


$TGL                =$_POST['tanggal_reg'];
$NO_URUT            =$_POST['no_urut'];
$NAMA_PEG           =$_POST['nama_peg'];
$NAMA_PAS           =$_POST['nama_pas'];
$KODE_JADWAL        =$_POST['jadwal'];


if ($TGL==""  || $NO_URUT==""  ||  $NAMA_PEG==""  ||  $NAMA_PAS==""  ||  $KODE_JADWAL==""  ) {


    echo"<script>

        alert('GAGAL');
    
        </script>";

    }
    else
    {
    $QUERY1=mysqli_query($CONNECT,"INSERT INTO tb_pendaftaran SET 
    tanggal_reg ='$TGL',
    no_urut     ='$NO_URUT',
    nip         ='$NAMA_PEG',
    kode_pas    ='$NAMA_PAS',
    kode_jadwal ='$KODE_JADWAL'
    ;")
        or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT));

    echo"<script>

        alert('BERHASIL ');
    
        </script>";



 header("location:../../pendaftar/index.php?page=pendaftar");

}

?>