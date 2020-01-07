<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        $KODE = $_GET['kode_jenis_biaya'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=biaya">Data Biaya</a>
        </li>
          <li class="breadcrumb-item active">Edit Biaya</li>
        </ol>

      <center><h4><b>| Edit Biaya |</b></h4></center>

<?php

$TAMPIL  ="SELECT  *FROM tb_jenis_biaya
           
           WHERE tb_jenis_biaya.kode_jenis_biaya = '$KODE'" or die(mysqli_error());

$HASIL = mysqli_query($CONNECT,$TAMPIL);

while ($ROW = mysqli_fetch_array($HASIL)) {

$KODE                     =$ROW['kode_jenis_biaya'];
$NAMA                     =$ROW['nama_biaya'];
$TARIF                    =$ROW['tarif'];

	

}
?>

<form method="POST" enctype="multipart/form-data">
                        <?php 
                        if (@$_POST['edit']) {
                          include 'proses_edit.php';
                        } 
                        
                        ?>
          <div class="form-group">
            <div>
              <div class="col-md-13">
                <label for="firstName">Kode</label>
                 <div class="form-label-group">
                  <input type="text" class="form-control" name="kode_jenis_biaya" value="<?php echo $KODE; ?>" readonly>
                 </div>
              </div>  
              <div class="col-md-13">
                <label for="firstName">Nama Biaya</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_biaya" class="form-control" name="nama_biaya" required="required" autofocus="autofocus" value="<?php echo $NAMA; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Tarif</label>
                 <div class="form-label-group">
                  <input type="number" id="tarif" class="form-control" name="tarif" required="required" autofocus="autofocus" value="<?php echo $TARIF; ?>">
                 </div>
              </div>
              <br>
              <div class="row">
              <div class="col-md-2">            
              <input type ="submit" name="edit" class="btn btn-primary btn-block" value="edit data">
              </div>
              <div class="col-md-2">            
              <a href="?page=biaya" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
<br>    

