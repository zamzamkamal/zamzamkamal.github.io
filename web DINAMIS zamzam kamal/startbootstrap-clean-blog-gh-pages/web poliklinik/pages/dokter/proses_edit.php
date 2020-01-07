<?php 
$KODE           = mysqli_real_escape_string($CONNECT, @$_POST['kode_dok']);
$NAMA           = mysqli_real_escape_string($CONNECT, @$_POST['nama_dok']);
$ALAMAT         = mysqli_real_escape_string($CONNECT, @$_POST['alamat_dok']);
$TELEPON        = mysqli_real_escape_string($CONNECT, @$_POST['telp_dok']);
$POLI           = mysqli_real_escape_string($CONNECT, @$_POST['poli']);
$JADWAL         = mysqli_real_escape_string($CONNECT, @$_POST['jadwal']);

if ($KODE == "" || $NAMA == "" || $ALAMAT == "" || $TELEPON == "" || $POLI == "" || $JADWAL == "") 
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
  $QUERY = mysqli_query($CONNECT, "UPDATE tb_dokter  SET 
    nama_dok            ='$NAMA',
    alamat_dok          ='$ALAMAT',
    telp_dok            ='$TELEPON',
    kode_poli           ='$POLI',
    kode_jadwal         ='$JADWAL'
    WHERE tb_dokter.kode_dok='$KODE';")
     or die ("Gagal" .mysqli_error($CONNECT));
?>
  <div class="alert alert-success">
             <center>
             <strong>BERHASIL</strong<br>
             Anda akan di redirect secara otomatis 
             </div>
             </center>
             <meta http-equiv="refresh" content="2; url=?page=dokter">
<?php
}
 ?>