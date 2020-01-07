<?php 
$KODE           = mysqli_real_escape_string($CONNECT, @$_POST['kode_pas']);
$NAMA           = mysqli_real_escape_string($CONNECT, @$_POST['nama_pas']);
$ALAMAT         = mysqli_real_escape_string($CONNECT, @$_POST['alamat_pas']);
$TELEPON        = mysqli_real_escape_string($CONNECT, @$_POST['telp_pas']);
$TL             = mysqli_real_escape_string($CONNECT, @$_POST['tanggal_lahir_pas']);
$JK             = mysqli_real_escape_string($CONNECT, @$_POST['jenis_kelamin_pas']);
$TR             = mysqli_real_escape_string($CONNECT, @$_POST['tanggal_reg']);

if ($KODE == "" || $NAMA == "" || $ALAMAT == "" || $TELEPON == "" || $TL == "" || $JK == "" || $TR == "") 
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
  $QUERY = mysqli_query($CONNECT, "UPDATE tb_pasien  SET 
    nama_pas                    ='$NAMA',
    alamat_pas                  ='$ALAMAT',
    telp_pas                    ='$TELEPON',
    tanggal_lahir_pas           ='$TL',
    jenis_kelamin_pas           ='$JK',
    tanggal_reg                 ='$TR'
    WHERE tb_pasien.kode_pas    ='$KODE';")
     or die ("Gagal" .mysqli_error($CONNECT));
?>
  <div class="alert alert-success">
             <center>
             <strong>BERHASIL</strong><br>
             Anda akan di redirect secara otomatis 
             </div>
             </center>
             <meta http-equiv="refresh" content="2; url=?page=pasien">
<?php
}
 ?>