<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=periksa">Data Pemeriksa</a>
        </li>
          <li class="breadcrumb-item active">Tambah Pemeriksa</li>
        </ol>

      <center><h4><b>| Tambah Pemeriksa |</b></h4></center>

<form action="index.php?page=periksa&aksi=proses_tambah" method="post" >
          <div class="form-group">
            <div>
              <div class="col-md-13">
                  <label>Kode Pemeriksaan</label>
                  <input type="text" class="form-control" id="kode_pemeriksaan" name="kode_pemeriksaan" value="<?php echo autonumber('tb_pemeriksaan','kode_pemeriksaan',7,'PRS'); ?>" readonly>
                </div>
                </div>
              <div class="col-md-13">
                  <label>Tanggal Pemeriksaan</label>
                  <input type="date" class="form-control" id="date" name="date">
                </div>
                </div>
              <div class="col-md-13">
                <label>Nama Dokter</label>
                <div class="form-group">
                  <select class="form-control show-tick" name="rincian_pemeriksaan">
                    <option>- Nama Dokter -</option>
                       <?php 
                       $TAMPIL = mysqli_query($CONNECT, "SELECT * FROM tb_dokter ORDER BY tb_dokter.kode_dok ASC");
                                        $NO=1;
                                        while ($ROW=@mysqli_fetch_array($TAMPIL)) {
                                            $NO;
                                            $KODE           =$ROW['kode_dok'];
                                            $NAMA           =$ROW['nama_dok'];

                                            
                                            ?>
                   <option value="<?php echo $KODE_DOK; ?>">
                     <?php echo $NAMA; ?></option>
                 <?php } ?>
               </select>
             </div>
           </div>
              <div class="col-md-13">
                  <label>No Pendaftaran</label>
                <div class="form-group">
                  <select class="form-control show-tick" name="no_pendaftaran">
                    <option>- No Pendaftaran -</option>
                       <?php 
                          $Q_PENDAFTARAN = mysqli_query($CONNECT, "SELECT tb_jadwal_praktik.*, tb_pasien.*, tb_pegawai.*, tb_pendaftaran.* FROM tb_pendaftaran INNER JOIN tb_jadwal_praktik ON tb_jadwal_praktik.kode_jadwal=tb_pendaftaran.kode_jadwal INNER JOIN tb_pasien ON tb_pasien.kode_pas=tb_pendaftaran.kode_pas INNER JOIN tb_pegawai ON tb_pegawai.nip=tb_pendaftaran.nip") or die (mysqli_error());
                              while($DATA_PENDAFTARAN = mysqli_fetch_array($Q_PENDAFTARAN)) {
                                echo '<option value="'.$DATA_PENDAFTARAN['no_pendaftaran'].'">'.$DATA_PENDAFTARAN['no_pendaftaran'].'-Nama Pasien :' .$DATA_PENDAFTARAN['nama_pas'].'</option>';
                              }
                   ?>
               </select>
             </div>
           </div>
              <div class="col-md-13">
                  <label>Keluhan</label>
                  <input type="text" class="form-control" name="keluhan">
                </div>
              <div class="col-md-13">
                  <label>Diagnosa</label>
                  <input type="text" class="form-control" name="diagnosa">
                </div>
              <div class="col-md-13">
                  <label>Perawatan</label>
                  <input type="text" class="form-control" name="perawatan">
                </div>
              <div class="col-md-13">
                  <label>Tindakan</label>
                  <input type="text" class="form-control" name="tindakan">
                </div>
              <div class="col-md-13">
                  <label>Berat Badan</label>
                  <input type="number" class="form-control" name="berat_badan">
                </div>
              <div class="col-md-13">
                  <label>Tekanan Diastolik</label>
                  <input type="text" class="form-control" name="diastolik">
                </div>
              <div class="col-md-13">
                  <label>Tensis Sistolik</label>
                  <input type="text" class="form-control" name="sistolik">
                </div>     
           <br>
              <div class="row">
              <div class="col-md-2">            
              <button type ="submit" name="tambah" class="btn btn-primary btn-block" value="tambah data">Tambah</button>
              </div>
              <div class="col-md-2">            
              <input type ="reset" name="" class="btn btn-info btn-block" value="Hapus">
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
