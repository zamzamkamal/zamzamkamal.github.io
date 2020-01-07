<?php   
$query_informasi = mysqli_query($CONNECT," SELECT * FROM tb_informasi WHERE id_informasi = '1'");
$informasi = @mysqli_fetch_array($query_informasi);
?>

<div id="content-wrapper">
<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Info Poliklinik</li>
        </ol>

      <center><h3><b>| Info Poliklinik |</b></h3></center>
     <hr class="garis">
<div class="panel-body">

  <?php 
  include @'kop_laporan.php' 
  ?>
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">

              <center><h4><b>| Form Instansi |</b></h4></center>
     <hr class="garis">
     
            </div>
            <?php  
            if (@$_POST['edit_info']) {
              include "proses_edit.php"; 
            }
             if (@$_POST['edit_logo']) {
              include "proses_edit_logo.php";
            }
            ?>
            <form role="form" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="nama_poliklinik">Nama Instansi</label>
                  <input type="text" class="form-control" id="nama_poliklinik" name="nama_poliklinik" value="<?php echo $informasi['nama_poliklinik']; ?>" placeholder="Nama Instansi" required>
                </div>

                <div class="form-group">
                  <label for="deskripsi_poliklinik">Deskripsi</label>
                  <textarea type="text" class="form-control" id="deskripsi_poliklinik" name="deskripsi_poliklinik" placeholder="Deskripsi" required><?php echo $informasi['deskripsi_poliklinik'] ;?></textarea>
                </div>

                <div class="form-group">
                  <label for="alamat_poliklinik">Alamat</label>
                  <textarea type="text" class="form-control" id="alamat_poliklinik" name="alamat_poliklinik" placeholder="Alamat" required><?php echo $informasi['alamat_poliklinik'] ;?></textarea>
                </div>

                <div class="form-group">
                  <label for="kec_polklinik">Kecamatan</label>
                  <input type="text" class="form-control" id="kec_poliklinik" name="kec_poliklinik" value="<?php echo $informasi['kec_poliklinik'] ;?>" placeholder="Kecamatan" required>
                </div>

                <div class="form-group">
                  <label for="kab_poliklinik">Kabupaten</label>
                  <input type="text" class="form-control" id="kab_poliklinik" name="kab_poliklinik" value="<?php echo $informasi['kab_poliklinik'] ;?>"  placeholder="Kabupaten" required>
                </div>

                <div class="form-group">
                  <label for="prov_poliklinik">Provinsi</label>
                  <input type="text" class="form-control" id="prov_poliklinik" name="prov_poliklinik" value="<?php echo $informasi['prov_poliklinik'] ;?>" placeholder="Provinsi" required>
                </div>

                <div class="form-group">
                  <label for="kode_pos_poliklinik">Kode Pos</label>
                  <input type="text" class="form-control" id="kode_pos_poliklinik" name="kode_pos_poliklinik" value="<?php echo $informasi['kode_pos_poliklinik'] ;?>" placeholder="Kode Pos" required>
                </div>

                <div class="form-group">
                  <label for="telp_poliklinik">Telepon</label>
                  <input type="number" class="form-control" id="telp_poliklinik" name="telp_poliklinik" value="<?php echo $informasi['telp_poliklinik'] ;?>" placeholder="Telepon" required>
                </div>
                 
                  <div class="form-group">
                  <label for="email_poliklinik">Email</label>
                  <input type="email" class="form-control" id="email_poliklinik" name="email_poliklinik" value="<?php echo $informasi['email_poliklinik'] ;?>" placeholder="EMAIL" required>
                </div>

              <div class="box-footer">
                <input  type="submit" class="btn btn-primary" name="edit_info" value="Perbarui Informasi">
                  
              </div>
    

          </form>

          <form role="form" method="POST" enctype="multipart/form-data">
          <!-- /.box -->
                <div class="form-group">
                  <label for="foto" class="col-lg-2 control-label">Foto Sebelumnya</label>
                  <div class="col-lg-1 col-md-2">
                    <img src="../image/<?php echo $informasi['logo_poliklinik'] ?>"  >
                  </div>
                </div>

              <div class="form-group">
                  <label for="foto" class="col-lg-2 col-md-2">Perbaharui Foto</label>
                <div class="col-lg-12 col-md-12">  
                  <input type="file" class="form-control" id="foto" name="foto" required >
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-lg-5 col-md-10">
                  <input type="submit" name="edit_logo" class="btn btn-primary" value="Perbaharui Logo" >
                </div>
              </div>

              </form>
         
              <!-- /.box-body -->

</div>

        <!--/.col (right) -->

      <!-- /.row -->
<br>      
