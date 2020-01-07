<?php 
$KODE           = mysqli_real_escape_string($CONNECT, @$_POST['kode_jenis_biaya']);
$NAMA           = mysqli_real_escape_string($CONNECT, @$_POST['nama_biaya']);
$TARIF          = mysqli_real_escape_string($CONNECT, @$_POST['tarif']);

if ($KODE == "" || $NAMA == "" || $TARIF == "") 
{
?>
  <div class="alert alert-danger">
            <center>
            <strong>error</strong><br>
            Pastikan semua data terisi!! 
            </div>
            </center>
<?php
}
else 
{
  $QUERY = mysqli_query($CONNECT, "UPDATE tb_jenis_biaya SET 
    nama_biaya            ='$NAMA',
    tarif                 ='$TARIF'
    WHERE tb_jenis_biaya.kode_jenis_biaya='$KODE';")
     or die ("Gagal" .mysqli_error($CONNECT));
?>
  <div class="alert alert-success">
             <center>
             <strong>BERHASIL</strong<br>
             Anda akan di redirect secara otomatis 
             </div>
             </center>
             <meta http-equiv="refresh" content="2; url=?page=biaya">
<?php
}
 ?>