<?php 
$KODE           = mysqli_real_escape_string($CONNECT, @$_POST['no_pendaftaran']);
$URUT           = mysqli_real_escape_string($CONNECT, @$_POST['no_urut']);
$PEGAWAI        = mysqli_real_escape_string($CONNECT, @$_POST['pegawai']);
$PASIEN         = mysqli_real_escape_string($CONNECT, @$_POST['pasien']);
$JADWAL         = mysqli_real_escape_string($CONNECT, @$_POST['jadwal']);

if ($KODE == "" || $URUT == "" || $PEGAWAI == "" || $PASIEN == "" ||  $JADWAL == "") 
{
?>
  <div class="alert alert-danger">
            <center>
            <strong>error</strong<br>
            Pastikan semua data terisi!! 
            </div>
            </center>
<?php
}
else 
{
  $QUERY = mysqli_query($CONNECT, "UPDATE tb_pendaftaran  SET 
    no_urut             ='$URUT',
    nip                 ='$PEGAWAI',
    kode_pas            ='$PASIEN',
    kode_jadwal         ='$JADWAL'
    WHERE tb_pendaftaran.no_pendaftaran='$KODE';")
     or die ("Gagal" .mysqli_error($CONNECT));
?>
  <div class="alert alert-success">
             <center>
             <strong>BERHASIL</strong<br>
             Anda akan di redirect secara otomatis 
             </div>
             </center>
             <meta http-equiv="refresh" content="2; url=?page=pendaftar">
<?php
}
 ?>