<div id="content-wrapper">
<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        $KODE = $_GET['no_pendaftaran'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=pendaftar">Data Pendaftar</a>
        </li>
          <li class="breadcrumb-item active">Edit Pendaftar</li>
        </ol>

      <center><h4><b>| Edit Pendaftar |</b></h4></center>


<?php

$TAMPIL  ="SELECT  *FROM tb_pendaftaran 
           
           WHERE tb_pendaftaran.no_pendaftaran = '$KODE'" or die(mysqli_error());

$HASIL = mysqli_query($CONNECT,$TAMPIL);

while ($ROW = mysqli_fetch_array($HASIL)) {

$KODE                       =$ROW['no_pendaftaran'];
$TANGGAL                    =$ROW['tanggal_reg'];
$URUT                       =$ROW['no_urut'];
$PEGAWAI                    =$ROW['nip'];
$PASIEN                     =$ROW['kode_pas'];
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
                  <input type="text" class="form-control" name="no_pendaftaran" value="<?php echo $KODE; ?>" readonly>
                  </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Tanggal</label>
                 <div class="form-label-group">
                  <input type="date" id="tanggal_reg" class="form-control" name="tanggal_reg" required="required" autofocus="autofocus" value="<?php echo $TANGGAL; ?>" readonly>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">No Urut</label>
                 <div class="form-label-group">
                  <input type="text" id="no_urut" class="form-control" name="no_urut" required="required" autofocus="autofocus" value="<?php echo $URUT; ?>" readonly>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama Pegawai</label>
                 <div class="form-label-group">
                  <?php
                  $query_user = mysqli_query($CONNECT,"SELECT tb_login.*,tb_pegawai.* FROM tb_pegawai
                  INNER JOIN tb_login ON tb_login.nip = tb_pegawai.nip
                  WHERE username = '".$_SESSION['username']."'");
                  $user = @mysqli_fetch_array($query_user);
                  $pegawai = $user['nip'];
                  ?>
                  <input type="text" id="pegawai" class="form-control" name="pegawai" required="required" value="<?php echo $PEGAWAI ?>" required readonly>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="nama_peg">Nama pasien</label>
                 <div class="form-label-group">
                 <select class="form-control" name="pasien">
                 <option>~Nama Pasien~</option>
                  <?php $TAMPIL = mysqli_query($CONNECT,"SELECT * FROM tb_pasien ORDER BY tb_pasien.kode_pas ASC");
                        while($ROW= @mysqli_fetch_array($TAMPIL)) {
                          $NO;
                          $KODE_PASIEN       =$ROW['kode_pas'];
                          $NAMA_PASIEN       =$ROW['nama_pas'];
                          $ALAMAT            =$ROW['alamat_pas'];?>
                  <option value="<?php echo $KODE_PASIEN; ?>"
                    <?php if ($KODE_PASIEN==$PASIEN) {
                      echo "selected=\"selected\"";
                    } ?>
                    ><?php echo $NAMA_PASIEN; echo " - "; echo $ALAMAT; ?></option>
                  <?php } ?>
                  </select>
                 </div>
              </div>
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
              <a href="?page=pendaftar" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
<br>
<br>
