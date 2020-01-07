<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=jadwal">Data Jadwal Praktik</a>
        </li>
          <li class="breadcrumb-item active">Tambah Jadwal Praktik</li>
        </ol>

      <center><h4><b>| Tambah Jadwal Praktik |</b></h4></center>

<form action="index.php?page=jadwal&aksi=proses_tambah" role="form" method="post" >
          <div class="form-group">
            <div>
              <div class="col-md-13">
                <label for="firstName">Kode</label>
                 <div class="form-label-group">
                  <input type="text" id="kode_jadwal" class="form-control" name="kode_jadwal" required="required" autofocus="autofocus" value="<?php echo autonumber("tb_jadwal_praktik","kode_jadwal",6,"JDWL"); ?> " required readonly>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Hari</label>
                 <div class="form-label-group">
                  <input type="text" id="hari" class="form-control" name="hari" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Jam Mulai</label>
                 <div class="form-label-group">
                  <input type="time" id="jam_mulai" class="form-control" name="jam_mulai" required="required">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Jam Selesai</label>
                 <div class="form-label-group">
                  <input type="time" id="jam_selesai" class="form-control" name="jam_selesai" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <br>
              
              <br>
              <div class="row">
              <div class="col-md-2">            
              <button type ="submit" name="tambah" class="btn btn-primary btn-block" value="tambah data">Tambah</button>
              </div>
              <div class="col-md-2">            
              <input type ="reset" name="" class="btn btn-info btn-block" value="Hapus">
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
