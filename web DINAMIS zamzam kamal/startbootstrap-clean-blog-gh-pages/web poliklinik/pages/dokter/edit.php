<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        $KODE = $_GET['kode_dok'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=dokter">Data Dokter</a>
        </li>
          <li class="breadcrumb-item active">Edit Dokter</li>
        </ol>

      <center><h4><b>| Edit Dokter |</b></h4></center>

<?php

$TAMPIL  ="SELECT  *FROM tb_dokter 
           
           WHERE tb_dokter.kode_dok = '$KODE'" or die(mysqli_error());

$HASIL = mysqli_query($CONNECT,$TAMPIL);

while ($ROW = mysqli_fetch_array($HASIL)) {

$KODE                       =$ROW['kode_dok'];
$NAMA                       =$ROW['nama_dok'];
$ALAMAT                     =$ROW['alamat_dok'];
$TELEPON                    =$ROW['telp_dok'];
$POLI                       =$ROW['kode_poli'];
$JADWAL                     =$ROW['kode_jadwal'];
	

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
                  <input type="text" class="form-control" name="kode_dok" value="<?php echo $KODE; ?>" readonly>
                  </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama Dokter</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_dok" class="form-control" name="nama_dok" required="required" autofocus="autofocus" value="<?php echo $NAMA; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="nama_peg">Alamat</label>
                 <div class="form-label-group">
                  <textarea type="text" id="alamat_dok" class="form-control" name="alamat_dok" required="required" autofocus="autofocus"><?php echo $ALAMAT; ?></textarea>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Telepon</label>
                 <div class="form-label-group">
                  <input type="number" id="telp_dok" class="form-control" name="telp_dok" required="required" autofocus="autofocus" value="<?php echo $TELEPON; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama Poli</label>
                 <div class="form-label-group">
                  <select class="form-control" name="poli" >
                  <?php $TAMPIL = mysqli_query($CONNECT,"SELECT * FROM tb_poliklinik ORDER BY tb_poliklinik.kode_poli ASC");
                        while($ROW = @mysqli_fetch_array($TAMPIL)) {

                          $NO;
                          $KODE_POLI    =$ROW['kode_poli'];
                          $NAMA_POLI    =$ROW['nama_poli']; ?>

                  <option value="<?php echo $KODE_POLI; ?>"
                    <?php if ($KODE_POLI==$POLI) {
                      echo "selected=\"selected\"";
                    } ?>
                    ><?php echo $NAMA_POLI; ?></option>
                  <?php } ?>
                  </select>
                 </div>
              </div>
              <br>
              <div class="col-md-13">
                <label for="nama_peg">Jadwal</label>
                 <div class="form-label-group">
                 <select class="form-control" name="jadwal">
                  <?php $TAMPIL = mysqli_query($CONNECT,"SELECT * FROM tb_jadwal_praktik ORDER BY tb_jadwal_praktik.kode_jadwal ASC");
                        while($ROW = @mysqli_fetch_array($TAMPIL)) {

                          $NO;
                          $KODE_JADWAL       =$ROW['kode_jadwal'];
                          $HARI              =$ROW['hari'];
                          $JAM_MULAI         =$ROW['jam_mulai'];
                          $JAM_SELESAI       =$ROW['jam_selesai'];?>

                  <option value="<?php echo $KODE_JADWAL; ?>" 
                      <?php if ($KODE_JADWAL==$JADWAL) {
                      echo "selected=\"selected\"";
                    } ?>
                    ><?php echo $HARI; echo ",";  echo $JAM_MULAI; echo "-"; echo $JAM_SELESAI; ?></option>
                  <?php } ?>
                  </select>
                 </div>
              </div>
              <br>
              <div class="row">
              <div class="col-md-2">            
              <input type ="submit" name="edit" class="btn btn-primary btn-block" value="edit data">
              </div>
              <div class="col-md-2">            
              <a href="?page=dokter" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
<br>
<br>  
<br>
<br>
