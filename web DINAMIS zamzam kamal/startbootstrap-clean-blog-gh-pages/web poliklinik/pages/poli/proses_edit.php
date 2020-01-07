<?php 
$KODE           = mysqli_real_escape_string($CONNECT, @$_POST['kode_poli']);
$NAMA           = mysqli_real_escape_string($CONNECT, @$_POST['nama_poli']);

if ($KODE == "" || $NAMA == "") 
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
  $QUERY = mysqli_query($CONNECT, "UPDATE tb_poliklinik SET 
    nama_poli            ='$NAMA'
    WHERE tb_poliklinik.kode_poli='$KODE';")
     or die ("Gagal" .mysqli_error($CONNECT));
?>
  <div class="alert alert-success">
             <center>
             <strong>BERHASIL</strong<br>
             Anda akan di redirect secara otomatis 
             </div>
             </center>
             <meta http-equiv="refresh" content="2; url=?page=poli">
<?php
}
 ?>