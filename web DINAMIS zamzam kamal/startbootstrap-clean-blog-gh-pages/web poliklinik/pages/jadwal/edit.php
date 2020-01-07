<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        $KODE= $_GET['kode_jadwal'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=jadwal">Data Jadwal Praktik</a>
        </li>
          <li class="breadcrumb-item active">Edit Jadwal Praktik</li>
        </ol>

      <center><h4><b>| Edit Jadwal Praktik |</b></h4></center>


<?php

$TAMPIL  ="SELECT  *FROM tb_jadwal_praktik 
           
           WHERE tb_jadwal_praktik.kode_jadwal = '$KODE'" or die(mysqli_error());

$HASIL = mysqli_query($CONNECT,$TAMPIL);

while ($ROW = mysqli_fetch_array($HASIL)) {

$KODE                     =$ROW['kode_jadwal'];
$HARI                     =$ROW['hari'];
$JAM_MULAI                =$ROW['jam_mulai'];
$JAM_SELESAI              =$ROW['jam_selesai'];
	

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
                  <input type="text" class="form-control" name="kode_jadwal" value="<?php echo $KODE; ?>" readonly>
                  </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Hari</label>
                 <div class="form-label-group">
                  <input type="text" id="hari" class="form-control" name="hari" required="required" autofocus="autofocus" value="<?php echo $HARI; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="nama_peg">Jam Mulai</label>
                 <div class="form-label-group">
                  <input type="time" id="jam_mulai" class="form-control" name="jam_mulai" required="required" autofocus="autofocus" value="<?php echo $JAM_MULAI; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Jam Selesai</label>
                 <div class="form-label-group">
                  <input type="time" id="jam_selesai" class="form-control" name="jam_selesai" required="required" autofocus="autofocus" value="<?php echo $JAM_SELESAI; ?>">
                 </div>
              </div>
              <br>
              <div class="row">
              <div class="col-md-2">            
              <input type ="submit" name="edit" class="btn btn-primary btn-block" value="edit data">
              </div>
              <div class="col-md-2">            
              <a href="?page=jadwal" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
<br>
<br>
<br>
<br>
