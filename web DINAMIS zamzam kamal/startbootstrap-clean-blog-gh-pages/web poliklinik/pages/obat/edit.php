<div id="content-wrapper">
<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        $KODE = $_GET['kode_obat'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=obat">Data Obat</a>
        </li>
          <li class="breadcrumb-item active">Edit Obat</li>
        </ol>

      <center><h4><b>| Edit Obat |</b></h4></center>

<?php

$TAMPIL  ="SELECT  *FROM tb_obat
           
           WHERE tb_obat.kode_obat = '$KODE'" or die(mysqli_error());

$HASIL = mysqli_query($CONNECT,$TAMPIL);

while ($ROW = mysqli_fetch_array($HASIL)) {

$KODE                     =$ROW['kode_obat'];
$NAMA                     =$ROW['nama_obat'];
$MERK                     =$ROW['merk'];
$SATUAN                   =$ROW['satuan'];
$HARGA                    =$ROW['harga_jual'];

	

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
                  <input type="text" class="form-control" name="kode_obat" value="<?php echo $KODE; ?>" readonly>
                  </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama Obat</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_obat" class="form-control" name="nama_obat" required="required" autofocus="autofocus" value="<?php echo $NAMA; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Merk</label>
                 <div class="form-label-group">
                  <input type="text" id="merk" class="form-control" name="merk" required="required" autofocus="autofocus" value="<?php echo $MERK; ?>">
                 </div>
              </div>   
                 <div class="col-md-13">
                <label for="firstName">Satuan</label>
                 <div class="form-label-group">
                  <input type="text" id="satuan" class="form-control" name="satuan" required="required" autofocus="autofocus" value="<?php echo $SATUAN; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Harga Jual</label>
                 <div class="form-label-group">
                  <input type="number" id="harga_jual" class="form-control" name="harga_jual" required="required" autofocus="autofocus" value="<?php echo $HARGA; ?>">
                 </div>
              </div>
              <br>
              <div class="row">
              <div class="col-md-2">            
              <input type ="submit" name="edit" class="btn btn-primary btn-block" value="edit data">
              </div>
              <div class="col-md-2">            
              <a href="?page=obat" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
<br>
