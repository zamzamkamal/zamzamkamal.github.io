<?php 
$KODE           = mysqli_real_escape_string($CONNECT, @$_POST['kode_jadwal']);
$HARI           = mysqli_real_escape_string($CONNECT, @$_POST['hari']);
$JAM_MULAI      = mysqli_real_escape_string($CONNECT, @$_POST['jam_mulai']);
$JAM_SELESAI    = mysqli_real_escape_string($CONNECT, @$_POST['jam_selesai']);

if ($KODE == "" || $HARI == "" || $JAM_MULAI == "" || $JAM_SELESAI == "") 
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
  $QUERY = mysqli_query($CONNECT, "UPDATE tb_jadwal_praktik  SET 
    hari            ='$HARI',
    jam_mulai       ='$JAM_MULAI',
    jam_selesai     ='$JAM_SELESAI'
    WHERE tb_jadwal_praktik.kode_jadwal='$KODE';")
     or die ("Gagal" .mysqli_error($CONNECT));
?>
  <div class="alert alert-success">
             <center>
             <strong>BERHASIL</strong<br>
             Anda akan di redirect secara otomatis 
             </div>
             </center>
             <meta http-equiv="refresh" content="2; url=?page=jadwal">
<?php
}
 ?>