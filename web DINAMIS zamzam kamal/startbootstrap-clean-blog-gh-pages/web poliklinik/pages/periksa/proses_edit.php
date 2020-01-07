<?php
$satu 		= mysqli_real_escape_string($CONNECT,@$_POST['kode_pemeriksaan']);
$dua		= mysqli_real_escape_string($CONNECT,@$_POST['tanggal_pemeriksaan']);
$tiga 		= mysqli_real_escape_string($CONNECT,@$_POST['keluhan']);
$empat		= mysqli_real_escape_string($CONNECT,@$_POST['diagnosa']);
$lima		= mysqli_real_escape_string($CONNECT,@$_POST['perawatan']);
$enam		= mysqli_real_escape_string($CONNECT,@$_POST['tindakan']);
$tujuh		= mysqli_real_escape_string($CONNECT,@$_POST['berat_badan']);
$delapan	= mysqli_real_escape_string($CONNECT,@$_POST['tensi_diastolik']);
$sembilan	= mysqli_real_escape_string($CONNECT,@$_POST['tensi_sistolik']);
$sepuluh	= mysqli_real_escape_string($CONNECT,@$_POST['no_pendaftaran']);
$sebelas	= mysqli_real_escape_string($CONNECT,@$_POST['kode_dok']);
$duabelas	= mysqli_real_escape_string($CONNECT,@$_POST['rincian_pemeriksaan']);
$tigabelas	= mysqli_real_escape_string($CONNECT,@$_POST['status_pemeriksaan']);


if ($satu == "" || $dua == "" || $tiga == "" || $empat == "" || $lima == "" || $enam =="" || $tujuh =="" || $delapan =="" || $sembilan =="" || $sepuluh =="" || $sebelas =="" || $duabelas =="" || $tigabelas =="")
{
?>
<div class="alert alert-block alert-danger">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-warning-sign red"></i>
	Pastikan Semua Form Terisi !!!	
</div>
<?php
}
else
{
  $query = mysqli_query($CONNECT,"UPDATE `tb_pemeriksaan` SET 
	tanggal_pemeriksaan		= '$dua',
	keluhan					= '$tiga',
	diagnosa				= '$empat',
	perawatan				= '$lima',
	tindakan				= '$enam',
	berat_badan				= '$tujuh',
	tensi_diastolik			= '$delapan',
	tensi_sistolik			= '$sembilan',
	no_pendaftaran			= '$sepuluh',
	kode_dok				= '$sebelas',
	rincian_pemeriksaan		= '$duabelas',
	status_pemeriksaan = '$tigabelas' WHERE tb_pemeriksaan.kode_pemeriksaan='$satu';") 
   or die (mysqli_error($CONNECT));

?>
<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Santuy atuh DUDE..!!!</h4>

</div>
<meta http-equiv="refresh" content="2; url=index.php?page=periksa">
<?php
}
?>