<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        $KODE = $_GET['kode_resep'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=resep">Data Resep</a>
        </li>
          <li class="breadcrumb-item active">Edit Resep</li>
        </ol>

      <center><h4><b>| Edit Resep |</b></h4></center>


<?php

$TAMPIL  ="SELECT  *FROM tb_resep
           
           WHERE tb_resep.kode_resep = '$KODE'" or die(mysqli_error());

$HASIL = mysqli_query($CONNECT,$TAMPIL);

while ($ROW = mysqli_fetch_array($HASIL)) {

$KODE                     =$ROW['kode_resep'];
$DOSIS                    =$ROW['dosis'];
$JUMLAH                   =$ROW['jumlah'];

	

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
                  <input type="text" class="form-control" name="kode_resep" value="<?php echo $KODE; ?>" readonly>
                  </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Dosis</label>
                 <div class="form-label-group">
                  <input type="text" id="dosis" class="form-control" name="dosis" required="required" autofocus="autofocus" value="<?php echo $DOSIS; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Jumlah</label>
                 <div class="form-label-group">
                  <input type="text" id="jumlah" class="form-control" name="jumlah" required="required" autofocus="autofocus" value="<?php echo $JUMLAH; ?>">
                 </div>
              </div>
              <br>
              <div class="row">
              <div class="col-md-2">            
              <input type ="submit" name="edit" class="btn btn-primary btn-block" value="edit data">
              </div>
              <div class="col-md-2">            
              <a href="?page=resep" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>

  

