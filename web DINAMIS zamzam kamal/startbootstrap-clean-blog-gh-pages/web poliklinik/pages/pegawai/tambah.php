<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=pegawai">Data Pegawai</a>
        </li>
          <li class="breadcrumb-item active">Tambah Pegawai</li>
        </ol>

      <center><h4><b>| Tambah Pegawai |</b></h4></center>
    
<form action="../pages/pegawai/proses_tambah.php" role="form" method="post" >
          <div class="form-group">
            <div>
              <div class="col-md-13">
                <label for="nama_poliklinik">NIP</label>
                 <div class="form-label-group">
                  <input type="text" id="nip" class="form-control" name="nip" required="required" autofocus="autofocus" value="<?php echo autonumber("tb_pegawai","nip",7,"PGW"); ?> " required readonly>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="nama_peg">Nama</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_peg" class="form-control" name="nama_peg" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Alamat</label>
                 <div class="form-label-group">
                  <textarea type="text" id="alamat_peg" class="form-control" name="alamat_peg" required="required" ></textarea>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="nama_peg">No Telepon</label>
                 <div class="form-label-group">
                  <input type="number" id="telp_peg" class="form-control" name="telp_peg" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <br>
              <div class="col-md-13">
                <label for="firstName">Jenis Kelamin</label>
                 <div class="form-label-group">
                  <input type="radio" id="jenis_kelamin_peg"  name="jenis_kelamin_peg" required="required" autofocus="autofocus" value="Pria">Pria<br>
                  <input type="radio" id="jenis_kelamin_peg"  name="jenis_kelamin_peg" required="required" autofocus="autofocus" value="Wanita">Wanita
                 </div>
              </div>
              <br>
              <div class="col-md-13">
                <label for="nama_peg">Status</label>
                 <div class="form-label-group">
                 <select class="form-control" name="status">
                 <option required="required"> Status Kepegawaian </option>
                 <option value="Admin">Admin</option>
                 <option value="Dokter">Dokter</option>
                 <option value="Kasir">Kasir</option>
                 <option value="Pendaftar">Pendaftar</option>
                 </select>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Username</label>
                 <div class="form-label-group">
                  <input type="text" id="username" class="form-control" name="username" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Password</label>
                 <div class="form-label-group">
                  <input type="password" id="password" class="form-control" name="password" required="required" autofocus="autofocus" value="">
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
              <a href="?page=pegawai" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
<br>
<br>
<br>
<br>
