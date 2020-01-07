<?php
    $foto   =@$_FILES['foto']['tmp_name'];
    $target ='../image/';
    $gambar =@$_FILES['foto']['name'];

    if ($gambar=="")

{   
?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert" >
            <strong>error!</strong> dude <a href="#" class="alert-link"> pastikan </a> semua data terisi.
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
<?php
}
else
{
    $update_logo =move_uploaded_file($foto, $target.$gambar);
    if ($update_logo)


        {
        $query = mysqli_query($CONNECT, "UPDATE `tb_informasi` SET logo_poliklinik='$gambar' WHERE id_informasi='1' ;") or die (mysqli_error());    
    }
?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Update logo Success!</strong>
             <h5>Dalam waktu 3 detik halaman akan di alihkan</h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <meta http-equiv="refresh" content="3; url=?page=info">
    <?php
}
    ?>





