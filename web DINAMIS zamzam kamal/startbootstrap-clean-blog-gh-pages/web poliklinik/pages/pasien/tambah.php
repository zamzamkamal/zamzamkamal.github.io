<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=pasien">Data Pasien</a>
        </li>
          <li class="breadcrumb-item active">Tambah Pasien</li>
        </ol>

      <center><h4><b>| Tambah Pasien |</b></h4></center>

<form action="index.php?page=pasien&aksi=proses_tambah" role="form" method="post" >
          <div class="form-group">
            <div>
              <div class="col-md-13">
                <label for="firstName">Kode</label>
                 <div class="form-label-group">
                  <input type="text" id="kode_pas" class="form-control" name="kode_pas" required="required" autofocus="autofocus" value="<?php echo autonumber("tb_pasien","kode_pas",6,"PAS"); ?> " required readonly>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama Pasien</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_pas" class="form-control" name="nama_pas" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Alamat</label>
                 <div class="form-label-group">
                  <textarea id="alamat_pas" class="form-control" name="alamat_pas" required="required" autofocus="autofocus" value=""></textarea>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Telepon</label>
                 <div class="form-label-group">
                  <input type="number" id="telp_pas" class="form-control" name="telp_pas" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Tanggal Lahir</label>
                 <div class="form-label-group">
                  <input type="date" id="tanggal_lahir_pas" class="form-control" name="tanggal_lahir_pas" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <br>
              <div class="col-md-13">
                <label for="firstName">Jenis Kelamin</label>
                 <div class="form-label-group">
                  <input type="radio" id="jenis_kelamin_pas"  name="jenis_kelamin_pas" required="required" autofocus="autofocus" value="Pria">Pria<br>
                  <input type="radio" id="jenis_kelamin_pas"  name="jenis_kelamin_pas" required="required" autofocus="autofocus" value="Wanita">Wanita
                 </div>
              </div>
              <br>
              <div class="col-md-13">
                <label for="firstName">Tanggal Registrasi</label>
                 <div class="form-label-group">
                  <input type="date" id="tanggal_reg" class="form-control" name="tanggal_reg" required="required" autofocus="autofocus" value="<?php echo date ('Y-m-d'); ?>" readonly>
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
              <a href="?page=pasien" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
</div>
</div>
<br>
<br>
<br>
<br>
