<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        $KODE = $_GET['kode_poli'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=poli">Data Poli</a>
        </li>
          <li class="breadcrumb-item active">Edit Poli</li>
        </ol>

      <center><h4><b>| Edit Poli |</b></h4></center>

<?php

$TAMPIL  ="SELECT  *FROM tb_poliklinik
           
           WHERE tb_poliklinik.kode_poli = '$KODE'" or die(mysqli_error());

$HASIL = mysqli_query($CONNECT,$TAMPIL);

while ($ROW = mysqli_fetch_array($HASIL)) {

$KODE                     =$ROW['kode_poli'];
$NAMA                     =$ROW['nama_poli'];

	

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
                  <input type="text" class="form-control" name="kode_poli" value="<?php echo $KODE; ?>" readonly>
                 </div>
              </div>
                  <input type="hidden" name="kode_poli" value="<?php echo $KODE; ?>">
              <div class="col-md-13">
                <label for="firstName">Nama Poli</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_poli" class="form-control" name="nama_poli" required="required" autofocus="autofocus" value="<?php echo $NAMA; ?>">
                 </div>
              </div>
              <br>
              <div class="row">
              <div class="col-md-2">            
              <input type ="submit" name="edit" class="btn btn-primary btn-block" value="edit data">
              </div>
              <div class="col-md-2">            
              <a href="?page=poli" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>

  
