<?php
$KODE =$_GET['kode_pas'];
?>

<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        $KODE = $_GET['kode_pas'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=pasien">Data Pasien</a>
        </li>
          <li class="breadcrumb-item active">Edit Pasien</li>
        </ol>

      <center><h4><b>| Edit Pasien |</b></h4></center>

<?php

$TAMPIL  ="SELECT  *FROM tb_pasien
           
           WHERE tb_pasien.kode_pas = '$KODE'" or die(mysqli_error());

$HASIL = mysqli_query($CONNECT,$TAMPIL);

while ($ROW = mysqli_fetch_array($HASIL)) {

$KODE                       =$ROW['kode_pas'];
$NAMA                       =$ROW['nama_pas'];
$ALAMAT                     =$ROW['alamat_pas'];
$TELEPON                    =$ROW['telp_pas'];
$TL                         =$ROW['tanggal_lahir_pas'];
$JK                         =$ROW['jenis_kelamin_pas'];
$TR                         =$ROW['tanggal_reg']; 

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
                  <input type="text" class="form-control" name="kode_pas" value="<?php echo $KODE; ?>" readonly>
                  </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_pas" class="form-control" name="nama_pas" required="required" autofocus="autofocus" value="<?php echo $NAMA; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Alamat</label>
                 <div class="form-label-group">
                  <input type="text" id="alamat_pas" class="form-control" name="alamat_pas" required="required" autofocus="autofocus" value="<?php echo $ALAMAT; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Telepon</label>
                 <div class="form-label-group">
                  <input type="text" id="telp_pas" class="form-control" name="telp_pas" required="required" value="<?php echo $TELEPON ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Tanggal Lahir</label>
                 <div class="form-label-group">
                  <input type="date" id="tanggal_lahir_pas" class="form-control" name="tanggal_lahir_pas" required="required" value="<?php echo $TL ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Jenis Kelamin</label>
                 <div class="form-label-group">
                  <input type="radio" name="jenis_kelamin_pas" value="pria" <?php if ($JK=='Pria') {echo "checked";} ?>>Pria
                  <input type="radio" name="jenis_kelamin_pas" value="wanita" <?php if ($JK=='Wanita') {echo "checked";} ?>>Wanita
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Tanggal Registrasi</label>
                 <div class="form-label-group">
                  <input type="text" id="tanggal_reg" class="form-control" name="tanggal_reg" required="required" value="<?php echo $TR ?>" required readonly>
                 </div>
              </div>
              <br>
              <div class="row">
              <div class="col-md-2">            
              <input type ="submit" name="edit" class="btn btn-primary btn-block" value="edit data">
              </div>
              <div class="col-md-2">            
              <a href="?page=pasien" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
<br>
<br>
<br>
<br>
