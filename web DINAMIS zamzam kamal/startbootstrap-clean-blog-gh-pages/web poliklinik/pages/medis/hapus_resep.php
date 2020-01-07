<?php 
ob_start();
include "../../inc/koneksi.php";

$ID 	= $_GET['id'];
mysqli_query($CONNECT, "DELETE FROM tb_rekam_medis_resep WHERE id_rekam_medis_resep='$ID'")or die(mysqli_error($CONNECT));
?>

<meta http-equiv="refresh" content="1; url=../Dokter/index.php?page=rekam_medis&aksi=detail&id=<?php echo $data['kode_pemeriksaan']; ?>">

<?php 
header("location:../../dokter/index.php?page=medis");
 ?>