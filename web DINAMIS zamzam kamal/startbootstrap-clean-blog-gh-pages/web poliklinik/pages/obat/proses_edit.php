<?php 
$KODE           = mysqli_real_escape_string($CONNECT, @$_POST['kode_obat']);
$NAMA           = mysqli_real_escape_string($CONNECT, @$_POST['nama_obat']);
$MERK           = mysqli_real_escape_string($CONNECT, @$_POST['merk']);
$SATUAN         = mysqli_real_escape_string($CONNECT, @$_POST['satuan']);
$HARGA          = mysqli_real_escape_string($CONNECT, @$_POST['harga_jual']);

if ($KODE == "" || $NAMA == "" || $MERK == "" || $SATUAN == "" || $HARGA == "") 
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
  $QUERY = mysqli_query($CONNECT, "UPDATE tb_obat  SET 
    nama_obat                   ='$NAMA',
    merk                        ='$MERK',
    satuan                      ='$SATUAN',
    harga_jual                  ='$HARGA'
    WHERE tb_obat.kode_obat     ='$KODE';")
     or die ("Gagal" .mysqli_error($CONNECT));
?>
  <div class="alert alert-success">
             <center>
             <strong>BERHASIL</strong><br>
             Anda akan di redirect secara otomatis 
             </div>
             </center>
             <meta http-equiv="refresh" content="2; url=?page=obat">
<?php
}
 ?>