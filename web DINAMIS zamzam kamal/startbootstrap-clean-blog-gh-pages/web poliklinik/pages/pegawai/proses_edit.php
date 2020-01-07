<?php 
$NIP        = mysqli_real_escape_string($CONNECT, @$_POST['nip']);
$NAMA       = mysqli_real_escape_string($CONNECT, @$_POST['nama_peg']);
$ALAMAT     = mysqli_real_escape_string($CONNECT, @$_POST['alamat_peg']);
$TELEPON    = mysqli_real_escape_string($CONNECT, @$_POST['telp_peg']);
$JENKEL     = mysqli_real_escape_string($CONNECT, @$_POST['jenis_kelamin_peg']);

$USERNAME = mysqli_real_escape_string($CONNECT, @$_POST['username']);
$PASSWORD = mysqli_real_escape_string($CONNECT, @$_POST['password']);
$STATUS   = mysqli_real_escape_string($CONNECT, @$_POST['type_user']);

if ($NIP == "" || $NAMA == "" || $ALAMAT == "" || $TELEPON == "" || $JENKEL == "" || $USERNAME == "" || $PASSWORD == "" || $STATUS == "") 
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
  $QUERY = mysqli_query($CONNECT, "UPDATE tb_pegawai INNER JOIN tb_login ON tb_pegawai.nip=tb_login.nip SET 
    nama_peg  ='$NAMA',
    alamat_peg  ='$ALAMAT',
    telp_peg  ='$TELEPON',
    jenis_kelamin_peg='$JENKEL'
    WHERE tb_pegawai.nip='$NIP';")
     or die ("Gagal" .mysqli_error($CONNECT));
  $QUERY2 = mysqli_query($CONNECT, "UPDATE tb_login INNER JOIN tb_pegawai ON tb_pegawai.nip=tb_login.nip SET
    username  = '$USERNAME', 
    password  = md5('$PASSWORD'),
    type_user ='$STATUS'
    WHERE tb_login.nip='$NIP';")
     or die ("Gagal" .mysqli_error($CONNECT));
?>
  <div class="alert alert-success">
             <center>
             <strong>BERHASIL</strong<br>
             Anda akan di redirect secara otomatis 
             </div>
             </center>
             <meta http-equiv="refresh" content="2; url=?page=pegawai">
<?php
}
 ?>