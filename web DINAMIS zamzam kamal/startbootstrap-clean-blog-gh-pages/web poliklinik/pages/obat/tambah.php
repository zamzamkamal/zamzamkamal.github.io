<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=obat">Data Obat</a>
        </li>
          <li class="breadcrumb-item active">Tambah Obat</li>
        </ol>

      <center><h4><b>| Tambah Obat |</b></h4></center>

<form action="index.php?page=obat&aksi=proses_tambah" role="form" method="post" >
          <div class="form-group">
            <div>
              <div class="col-md-13">
                <label for="firstName">Kode</label>
                 <div class="form-label-group">
                  <input type="text" id="kode_obat" class="form-control" name="kode_obat" required="required" autofocus="autofocus" value="<?php echo autonumber("tb_obat","kode_obat",7,"OBT"); ?> " required readonly>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama Obat</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_obat" class="form-control" name="nama_obat" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Merk</label>
                 <div class="form-label-group">
                  <input type="text" id="merk" class="form-control" name="merk" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Satuan</label>
                 <div class="form-label-group">
                  <input type="text" id="satuan" class="form-control" name="satuan" required="required" autofocus="autofocus" value="">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Harga Jual</label>
                 <div class="form-label-group">
                  <input type="number" id="harga_jual" class="form-control" name="harga_jual" required="required" autofocus="autofocus" value="">
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
              <a href="?page=obat" name="" class="btn btn-primary btn-block" value="Batal">Batal</a>
              </div>
             </div>
          </div>      
</form>
<br>
<br>
<br>
<br>
