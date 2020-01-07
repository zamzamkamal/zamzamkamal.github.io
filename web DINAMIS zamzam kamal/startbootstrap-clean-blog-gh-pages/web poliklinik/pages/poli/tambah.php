<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=poli">Data Poli</a>
        </li>
          <li class="breadcrumb-item active">Tambah Poli</li>
        </ol>

      <center><h4><b>| Tambah Poli |</b></h4></center>

<form action="../pages/poli/proses_tambah.php" role="form" method="post" >
          <div class="form-group">
            <div>
              <div class="col-md-13">
                <label for="firstName">Kode</label>
                 <div class="form-label-group">
                  <input type="text" id="kode_poli" class="form-control" name="kode_poli" required="required" autofocus="autofocus" value="<?php echo autonumber("tb_poliklinik","kode_poli",6,"POLI"); ?> " required readonly>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama Poliklinik</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_poli" class="form-control" name="nama_poli" required="required" autofocus="autofocus" value="">
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
              <a href="?page=poli" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>