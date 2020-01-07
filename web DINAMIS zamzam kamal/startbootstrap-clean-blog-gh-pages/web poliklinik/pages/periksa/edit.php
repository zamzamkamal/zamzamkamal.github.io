<div class="container-fluid">
       <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=periksa">Data Pemeriksa</a>
        </li>
          <li class="breadcrumb-item active">Edit Pemeriksa</li>
        </ol>

      <center><h4><b>| Edit Pemeriksa |</b></h4></center>

<?php
$ID=$_GET['kode_pemeriksaan'];
$EDIT ="SELECT * FROM tb_pemeriksaan WHERE tb_pemeriksaan.kode_pemeriksaan='$ID'" or die ("Gagal melakukan query!!!!".mysql_error());
$HASILEDIT=mysqli_query($CONNECT,$EDIT);
while ($ROW = mysqli_fetch_array($HASILEDIT)) {
    $KODE_PEMERIKSAAN = $ROW['kode_pemeriksaan'];
    $TGL=$ROW['tanggal_pemeriksaan'];
    $KELUHAN=$ROW['keluhan'];
    $DIAGNOSA=$ROW['diagnosa'];
    $PERAWATAN=$ROW['perawatan'];
    $TINDAKAN=$ROW['tindakan'];
    $BERAT=$ROW['berat_badan'];
    $TENSI_DIASTOLIK=$ROW['tensi_diastolik'];
    $TENSI_SISTOLIK=$ROW['tensi_sistolik'];
    $NO_PENDAFTARAn=$ROW['no_pendaftaran'];
    $RINCIAN=$ROW['rincian_pemeriksaan'];
    $STATUS=$ROW['status_pemeriksaan'];
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
                        <input type="text" class="form-control" id="kode_pemeriksaan" name="kode_pemeriksaan" value="<?php echo $KODE_PEMERIKSAAN; ?>" required readonly>
                  </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Tanggal Pemeriksaan</label>
                 <div class="form-label-group">
                        <input type="text" class="form-control" id="input" name="tanggal_pemeriksaan" value="<?php echo $TGL; ?>" required>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama Dokter</label>
                 <div class="form-label-group">
                        <select required class="form-control" name="kode_dok" id="kode_dok">
                            <option value="">- Pilih Dokter -</option>
                                <?php
                                $sql_dok = mysqli_query($CONNECT, "SELECT * FROM tb_dokter") or die (mysqli_error($CONNECT));
                                while ($data_dok = mysqli_fetch_array($sql_dok)) {
                                    echo '<option value="'.$data_dok['kode_dok'].'">'.$data_dok['nama_dok'].' - '.$data_dok['alamat_dok'].'</option>';
                                } ?>
                        </select>
                    </div>
                </div>
              <div class="col-md-13">
                <label for="firstName">No Pendaftaran</label>
                 <div class="form-label-group">
                        <select required class="form-control" name="no_pendaftaran" id="no_pendaftaran">
                            <option value="">- Pilih No Pendaftaran -</option>
                                <?php
                                $q_pendaftaran = mysqli_query($CONNECT,"SELECT tb_jadwal_praktik.*,tb_pasien.*,tb_pegawai.*,tb_pendaftaran.*
                                FROM tb_pendaftaran
                                INNER JOIN tb_jadwal_praktik on tb_jadwal_praktik.kode_jadwal = tb_pendaftaran.kode_jadwal
                                INNER JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas
                                INNER JOIN tb_pegawai on tb_pegawai.nip = tb_pendaftaran.nip") or die(mysqli_error());
                                while ($data_pendaftaran = mysqli_fetch_array($q_pendaftaran)) {
                                    echo '<option value="'.$data_pendaftaran['no_pendaftaran'].'">'.$data_pendaftaran['no_pendaftaran'].' - Nama Pasien : '.$data_pendaftaran['nama_pas'].'</option>';
                                } ?>
                        </select>
                 </div>
              </div>
               <div class="col-md-13">
                <label for="firstName">Keluhan</label>
                 <div class="form-label-group">
                        <textarea class="form-control" id="keluhan" name="keluhan" required><?php echo $KELUHAN; ?></textarea>
                 </div>
              </div>
               <div class="col-md-13">
                <label for="firstName">Diagnosa</label>
                 <div class="form-label-group">
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa" value="<?php echo $DIAGNOSA; ?>" required>
                 </div>
              </div>
               <div class="col-md-13">
                <label for="firstName">Perawatan</label>
                 <div class="form-label-group">
                        <textarea class="form-control" id="perawatan" name="perawatan" required><?php echo $PERAWATAN; ?></textarea>
                 </div>
              </div>
               <div class="col-md-13">
                <label for="firstName">Tindakan</label>
                 <div class="form-label-group">
                        <textarea class="form-control" id="tindakan" name="tindakan" required><?php echo $TINDAKAN; ?></textarea>
                 </div>
              </div>
               <div class="col-md-13">
                <label for="firstName">Berat Badan</label>
                 <div class="form-label-group">
                        <input type="number" class="form-control" id="berat_badan" name="berat_badan" value="<?php echo $BERAT; ?>" required>
                 </div>
              </div>
               <div class="col-md-13">
                <label for="firstName">Tensi Diastolik</label>
                 <div class="form-label-group">
                        <input type="number" class="form-control" id="tensi_diastolik" name="tensi_diastolik" value="<?php echo $TENSI_DIASTOLIK; ?>" required>
                 </div>
              </div>
               <div class="col-md-13">
                <label for="firstName">Tensi Sistolik</label>
                 <div class="form-label-group">
                        <input type="number" class="form-control" id="tensi_sistolik" name="tensi_sistolik" value="<?php echo $TENSI_SISTOLIK; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Rincian Pemeriksaan</label>
                    <div class="col-md-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="rincian_pemeriksaan" id="Pria" value="0" <?php if ($RINCIAN==0) {echo 'Checked';} ?> required="required"> Belum Konfirmasi
                            </label>&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="rincian_pemeriksaan" id="1" value="1" <?php if ($RINCIAN==1) {echo 'Checked';} ?> required="required"> Sudah Konfirmasi
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Status Pemeriksaan</label>
                    <div class="col-md-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="status_pemeriksaan" id="Pria" value="0" <?php if ($STATUS==0) {echo 'Checked';} ?> required="required"> Belum Transaksi
                            </label>&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="status_pemeriksaan" id="1" value="1" <?php if ($STATUS==1) {echo 'Checked';} ?> required="required"> Sudah Transaksi
                            </label>
                        </div>
                    </div>
                </div>
              <br>
              <div class="row">
              <div class="col-md-2">            
              <input type ="submit" name="edit" class="btn btn-primary btn-block" value="edit data">
              </div>
              <div class="col-md-2">            
              <a href="?page=periksa" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
<br>
<br>
<br>
<br>
