<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=biaya">Data Biaya</a>
        </li>
          <li class="breadcrumb-item active">Tambah Biaya</li>
        </ol>

      <center><h4><b>| Tambah Biaya |</b></h4></center>
      
<form action="../pages/biaya/proses_tambah.php" role="form" method="post" >
          <div class="form-group">
            <div>
              <div class="col-md-13">
                <label for="firstName">Kode</label>
                 <div class="form-label-group">
                  <input type="text" id="kode_jenis_biaya" class="form-control" name="kode_jenis_biaya" required="required" autofocus="autofocus" value="<?php echo autonumber("tb_jenis_biaya","kode_jenis_biaya",6,"BIYA"); ?> " required readonly>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama Biaya</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_biaya" class="form-control" name="nama_biaya" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Tarif</label>
                 <div class="form-label-group">
                  <input type="text" id="tarif" class="form-control" name="tarif" required="required" autofocus="autofocus" value="">
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
              <a href="?page=biaya" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>