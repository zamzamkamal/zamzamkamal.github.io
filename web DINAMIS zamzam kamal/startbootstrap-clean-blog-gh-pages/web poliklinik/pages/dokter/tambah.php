<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=dokter">Data Dokter</a>
        </li>
          <li class="breadcrumb-item active">Tambah Dokter</li>
        </ol>

      <center><h4><b>| Tambah Dokter |</b></h4></center>

<form action="index.php?page=dokter&aksi=proses_tambah" method="post" >
          <div class="form-group">
            <div>
              <div class="col-md-13">
                <label for="firstName">Kode</label>
                 <div class="form-label-group">
                  <input type="text" id="kode_dok" class="form-control" name="kode_dok" required="required" autofocus="autofocus" value="<?php echo autonumber("tb_dokter","kode_dok",6,"DOKT"); ?> " required readonly>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_dok" class="form-control" name="nama_dok" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Alamat</label>
                 <div class="form-label-group">
                  <textarea type="text" id="alamat_dok" class="form-control" name="alamat_dok" required="required" ></textarea>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">No Telepon</label>
                 <div class="form-label-group">
                  <input type="number" id="telp_dok" class="form-control" name="telp_dok" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <br>
              <div class="col-md-13">
                <label for="firstName">Nama Poli</label>
                 <div class="form-label-group">
                  <select class="form-control" name="poli" required>
                  <option>~Jenis Poli~</option>
                  <?php $TAMPIL = mysqli_query($CONNECT,"SELECT * FROM tb_poliklinik ORDER BY tb_poliklinik.kode_poli ASC");
                        while($ROW=@mysqli_fetch_array($TAMPIL)) {
                          $NO;
                          $KODE_POLI    =$ROW['kode_poli'];
                          $NAMA_POLI    =$ROW['nama_poli']; ?>
                  <option value="<?php echo $KODE_POLI; ?>"><?php echo $NAMA_POLI; ?></option>
                  <?php } ?>
                  </select>
                 </div>
              </div>
              <br>
              <div class="col-md-13">
                <label for="nama_peg">Jadwal</label>
                 <div class="form-label-group">
                 <select class="form-control" name="jadwal">
                 <option>~Jadwal~</option>
                  <?php $TAMPIL = mysqli_query($CONNECT,"SELECT * FROM tb_jadwal_praktik ORDER BY tb_jadwal_praktik.kode_jadwal ASC");
                        while($ROW=@mysqli_fetch_array($TAMPIL)) {
                          $NO;
                          $KODE_JADWAL       =$ROW['kode_jadwal'];
                          $HARI              =$ROW['hari'];
                          $JAM_MULAI         =$ROW['jam_mulai'];
                          $JAM_SELESAI       =$ROW['jam_selesai'];?>
                  <option value="<?php echo $KODE_JADWAL; ?>"><?php echo $HARI; echo ",";  echo $JAM_MULAI; echo "-"; echo $JAM_SELESAI; ?></option>
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
              <a href="?page=dokter" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
<br>
<br>
<br>
<br>
