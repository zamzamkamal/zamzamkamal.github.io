<?php 
$KODE           = mysqli_real_escape_string($CONNECT, @$_POST['kode_resep']);
$DOSIS          = mysqli_real_escape_string($CONNECT, @$_POST['dosis']);
$JUMLAH         = mysqli_real_escape_string($CONNECT, @$_POST['jumlah']);

if ($KODE == "" || $DOSIS== "" || $JUMLAH  == "" ) 
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
  $QUERY = mysqli_query($CONNECT, "UPDATE tb_resep  SET 
    dosis                         ='$DOSIS',
    jumlah                        ='$JUMLAH'
    WHERE tb_resep.kode_resep     ='$KODE';")
     or die ("Gagal" .mysqli_error($CONNECT));
?>
  <div class="alert alert-success">
             <center>
             <strong>BERHASIL</strong><br>
             Anda akan di redirect secara otomatis 
             </div>
             </center>
             <meta http-equiv="refresh" content="2; url=?page=resep">
<?php
}
 ?>