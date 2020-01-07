<?php
ob_start();
 include '../inc/koneksi.php';
$dua               = mysqli_escape_string($CONNECT ,@$_POST['kode_pemeriksaan']);
$tiga              = mysqli_escape_string($CONNECT ,@$_POST['date']);
$empat             = mysqli_escape_string($CONNECT ,@$_POST['rincian_pemeriksaan']);
$lima              = mysqli_escape_string($CONNECT ,@$_POST['no_pendaftaran']);
$enam              = mysqli_escape_string($CONNECT ,@$_POST['keluhan']);
$tujuh             = mysqli_escape_string($CONNECT ,@$_POST['diagnosa']);
$delapan           = mysqli_escape_string($CONNECT ,@$_POST['perawatan']);
$sembilan          = mysqli_escape_string($CONNECT ,@$_POST['tindakan']);
$sepuluh           = mysqli_escape_string($CONNECT ,@$_POST['berat_badan']);
$sebelas           = mysqli_escape_string($CONNECT ,@$_POST['diastolik']);
$duabelas          = mysqli_escape_string($CONNECT ,@$_POST['sistolik']);



if ( $dua=="" || $tiga=="" || $empat=="" || $lima=="" || $enam=="" || $tujuh=="" || $delapan=="" || $sembilan=="" || $sepuluh==""|| $sebelas=="" || $duabelas=="" ) {


?>


<div class='alert alert-danger' role='alert'>
    	<strong>error!</strong>A<a href="#" class="alert-link">Pastikan </a>Semua data terisi.
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>

<?php
}
else
{
$QUERY1=mysqli_query($CONNECT,"INSERT INTO tb_pemeriksaan SET 
	kode_pemeriksaan        = '$dua',
	tanggal_pemeriksaan     = '$tiga',
	rincian_pemeriksaan     = '$empat',
	no_pendaftaran          = '$lima',
	keluhan                 = '$enam',
	diagnosa                = '$tujuh',
	perawatan               = '$delapan',
	tindakan                = '$sembilan',
	berat_badan             = '$sepuluh',
	tensi_diastolik         = '$sebelas',
	tensi_sistolik          = '$duabelas';") or die('Gagal memasukan data baru'.mysqli_error($CONNECT) );

?>

<div class='alert alert-success' role='alert'>
    	<strong>Tambah data sukses</strong>
    	<h5>Dalam Waktu 3 Detik halaman akan di alihkan.</h5>
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>
    <meta http-equiv="refresh" content="2;"
     url=index.php?page=periksa">
    <?php
 header("location:?page=periksa");

}
?>