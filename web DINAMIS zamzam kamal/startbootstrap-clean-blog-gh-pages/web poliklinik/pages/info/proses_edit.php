<?php  
$nama_poliklinik 						= mysqli_real_escape_string($CONNECT, $_POST['nama_poliklinik']);
$deskripsi_poliklinik 					= mysqli_real_escape_string($CONNECT, $_POST['deskripsi_poliklinik']);
$alamat_poliklinik 						= mysqli_real_escape_string($CONNECT, $_POST['alamat_poliklinik']);
$kec_poliklinik 						= mysqli_real_escape_string($CONNECT, $_POST['kec_poliklinik']);
$kab_poliklinik 						= mysqli_real_escape_string($CONNECT, $_POST['kab_poliklinik']);
$prov_poliklinik 						= mysqli_real_escape_string($CONNECT, $_POST['prov_poliklinik']);
$kode_pos_poliklinik 					= mysqli_real_escape_string($CONNECT, $_POST['kode_pos_poliklinik']);
$telp_poliklinik 						= mysqli_real_escape_string($CONNECT, $_POST['telp_poliklinik']);
$email_poliklinik 						= mysqli_real_escape_string($CONNECT, $_POST['email_poliklinik']);



if ($nama_poliklinik == "" || 
    $deskripsi_poliklinik == "" || 
    $alamat_poliklinik == "" || 
    $kec_poliklinik == "" || 
    $kab_poliklinik == "" || 
    $prov_poliklinik == "" || 
    $kode_pos_poliklinik == "" || 
    $telp_poliklinik =="" || 
    $email_poliklinik =="") {


?>

	<div class='alert alert-danger' role='alert'>
    	<strong>error!</strong>A<a href="#" class='alert-link'>Pastikan </a>Semua data terisi.
    	<button type='button' class='close' data-dismiss='alert' arial-label='close'>
    		<span aria-hidden='true'>&times;</span>
    	</button>
    </div>
<?php
}
else
{
	$query1 = mysqli_query($CONNECT,"UPDATE `tb_informasi` SET 

        `nama_poliklinik`       ='$nama_poliklinik',
        `deskripsi_poliklinik`   ='$deskripsi_poliklinik ',
        `alamat_poliklinik`     ='$alamat_poliklinik',
        `kec_poliklinik`        ='$kec_poliklinik', 
        `kab_poliklinik`        ='$kab_poliklinik',
        `kab_poliklinik`        ='$kab_poliklinik',
        `prov_poliklinik`       ='$prov_poliklinik',
        `kode_pos_poliklinik`  ='$kode_pos_poliklinik',
        `telp_poliklinik`       ='$telp_poliklinik',
        `email_poliklinik`      ='$email_poliklinik'

         WHERE `tb_informasi`.`id_informasi` = 1;") or die(mysqli_error($CONNECT));
?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Update Success!</strong>
             <h5>Dalam waktu 3 detik halaman akan di alihkan</h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <meta http-equiv="refresh" content="3; url=?page=info">
<?php

}
?>