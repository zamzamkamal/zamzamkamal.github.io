<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=pendaftar">Data Pendaftar</a>
        </li>
          <li class="breadcrumb-item active">Tambah Pendaftar</li>
        </ol>

      <center><h4><b>| Tambah Pendaftar |</b></h4></center>

<form action="index.php?page=pendaftar&aksi=proses_tambah" method="post" >
          <div class="form-group">
            <div>
              <div class="col-md-13">
                <label for="firstName">Tanggal Reg</label>
                 <div class="form-label-group">
                  <input type="date" class="form-control" id="tanggal_reg" name="tanggal_reg" value="<?php echo date("y-m-d"); ?>" required>
              </div>
            </div>
              <div class="col-md-13">
                <label for="firstName">No Urut</label>
                 <div class="form-label-group">
                      <?php 
                        $auto = mysqli_query($CONNECT,"SELECT * FROM tb_pendaftaran ORDER BY no_urut desc limit 1");
                        $no   = mysqli_fetch_array($auto);
                        $angka= $no['no_urut']+1;
                      ?>
                  <input type="nama_poliklinik" class="form-control" id="no_urut" name="no_urut" value="<?php echo $angka; ?>" required readonly>
              </div>
            </div>         
              <div class="col-md-13">
                <label for="firstName">Nama Pegawai</label>
                 <div class="form-label-group">
                  <?php  
                  $query_user   = mysqli_query($CONNECT,"SELECT tb_login.*,tb_pegawai.* FROM tb_pegawai INNER JOIN tb_login ON tb_login.nip =tb_pegawai.nip WHERE username ='" .$_SESSION['username']."'");
                  $user   = @mysqli_fetch_array($query_user);
                  ?>
                  <input type="text" class="form-control" id="nama_peg" name="nama_peg" value="<?php echo $user['nip']; ?>" readonly >
                </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama Pasien</label>
                 <div class="form-label-group">
                  <select class="form-control show-tick" name="nama_pas">
                  <option>- Pasien -</option>
                        <?php $TAMPIL = mysqli_query($CONNECT, "SELECT * FROM tb_pasien ORDER BY tb_pasien.kode_pas ASC");
                        $NO=1;
                        while ($ROW=@mysqli_fetch_array($TAMPIL)) {
                          $NO;
                          $KODE_PAS           =$ROW['kode_pas'];
                          $NAMA_PAS           =$ROW['nama_pas'];
                   
                        ?>
                   <option value="<?php echo $KODE_PAS; ?>"><?php echo $NAMA_PAS; ?></option>
                 <?php } ?>
                 </select>
                </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Jadwal</label>
                 <div class="form-label-group">
                  <select class="form-control show-tick" name="jadwal">
                    <option>- Jadwal -</option>
                       <?php 
                       $TAMPIL = mysqli_query($CONNECT, "SELECT * FROM tb_jadwal_praktik ORDER BY tb_jadwal_praktik.kode_jadwal ASC");
                                        $NO=1;
                                        while ($ROW=@mysqli_fetch_array($TAMPIL)) {
                                           $NO;
                                            $KODE             =$ROW['kode_jadwal'];
                                            $HARI             =$ROW['hari'];
                                            $JAMMULAI         =$ROW['jam_mulai'];
                                            $JAMMSELESAI      =$ROW['jam_selesai'];
                   
                   ?>
                   <option value="<?php echo $KODE ?>"><?php echo $HARI; echo ","; echo $JAMMULAI; echo "-"; echo $JAMMSELESAI; ?></option>
                 <?php } ?>
                 </select>
                </div>
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
              <a href="?page=pendaftar" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
<br>
<br>
<br>
<br>
