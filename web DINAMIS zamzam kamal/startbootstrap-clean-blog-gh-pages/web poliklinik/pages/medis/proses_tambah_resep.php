<?php
include '../../inc/koneksi.php';
$ID 		      = $_GET['id'];
$KODE 		= mysqli_real_escape_string($CONNECT,@$_POST['kode_resep']);

if ($ID == "" || $KODE == "0"  )
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
  $query = mysqli_query($CONNECT,"INSERT INTO `tb_rekam_medis_resep` VALUES ('', '$ID', '$KODE');") or die (mysqli_error());

?>
            <div class="alert alert-success">
             <center>
             <strong>BERHASIL</strong<br>
             Anda akan di redirect secara otomatis 
             </div>
             </center>
             <meta http-equiv="refresh" content="1; url=../../dokter/index.php?page=medis&aksi=detail_data&kode_pemeriksaan=<?php echo $ID; ?>">

<?php
}
?>