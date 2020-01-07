<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=resep">Data Resep</a>
        </li>
          <li class="breadcrumb-item active">Tambah Resep</li>
        </ol>

      <center><h4><b>| Tambah Resep |</b></h4></center>

<form action="index.php?page=resep&aksi=proses_tambah" role="form" method="post" >
          <div class="form-group">
            <div>
              <div class="col-md-13">
                <label for="firstName">Kode</label>
                 <div class="form-label-group">
                  <input type="text" id="kode_resep" class="form-control" name="kode_resep" required="required" autofocus="autofocus" value="<?php echo autonumber("tb_resep","kode_resep",6,"RESP"); ?> " required readonly>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Dosis</label>
                 <div class="form-label-group">
                  <input type="text" id="dosis" class="form-control" name="dosis" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Jumlah</label>
                 <div class="form-label-group">
                  <input type="text" id="jumlah" class="form-control" name="jumlah" required="required" autofocus="autofocus" value="">
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
              <a href="?page=resep" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>