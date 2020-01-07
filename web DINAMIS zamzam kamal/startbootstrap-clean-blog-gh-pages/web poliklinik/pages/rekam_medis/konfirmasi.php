<?php 
$VALUE = $_GET['value'];
$ID    = $_GET['id'];

if (	

$VALUE 		== 0 
|| $ID 	== ""  

) 
{
?>
<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<div class="container">
    <div class='alert-icon'>
        <i class='zmdi zmdi-block'></i>
    </div>
    <strong>GAGAL atuh DUDEEEE..!!!!</strong> Pastikan data terisi semua
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>
            <i class='zmdi zmdi-close'></i>
        </span>
    </button>

</div>
</div>
<?php 

}
else{

$QUERY1 = mysqli_query($CONNECT,"UPDATE tb_pemeriksaan SET 

    rincian_pemeriksaan 	= '$VALUE'
WHERE tb_pemeriksaan.kode_pemeriksaan='$ID'; ") or die(mysqli_error($CONNECT));
?>
<script>
alert('Berhasil');
</script>
<meta http-equiv='refresh' content='1; url=index.php?page=medis'>
<?php 
}

?>