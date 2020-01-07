<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        $NIP = $_GET['nip'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=pegawai">Data Pegawai</a>
        </li>
          <li class="breadcrumb-item active">Edit Pegawai</li>
        </ol>

      <center><h4><b>| Edit Pegawai |</b></h4></center>

<?php
 
$TAMPIL  ="SELECT tb_pegawai.*, tb_login.* FROM tb_pegawai INNER JOIN 
           
           tb_login ON tb_pegawai.nip = tb_login.nip 
           
           WHERE tb_pegawai.nip = '$NIP'" or die(mysqli_error());

$HASIL = mysqli_query($CONNECT,$TAMPIL);

while ($ROW = mysqli_fetch_array($HASIL)) {

	$NIP       = $ROW['nip'];
	$NAMA      = $ROW['nama_peg'];
	$ALAMAT    = $ROW['alamat_peg'];
	$TELEPON   = $ROW['telp_peg'];
	$JENKEL    = $ROW['jenis_kelamin_peg'];
	
  $USERNAME  = $ROW['username'];
	$PASSWORD  = $ROW['password'];
	$STATUS    = $ROW['type_user'];
}
?>

<form method="POST" enctype="multipart/form-data">
                        <?php 
                        if (@$_POST['edit']) {
                          include 'proses_edit.php';
                        } 
                        
                        ?>
          <div class="form-group">
            <div>
              <div class="col-md-13">
                <label for="firstName">NIP</label>
                <div class="form-label-group">
                  <input type="text" class="form-control" name="nip" value="<?php echo $NIP; ?>" readonly>
                  </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Nama</label>
                 <div class="form-label-group">
                  <input type="text" id="nama_peg" class="form-control" name="nama_peg" required="required" autofocus="autofocus" value="<?php echo $NAMA; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Alamat</label>
                 <div class="form-label-group">
                  <textarea type="text" id="alamat_peg" class="form-control" name="alamat_peg" required="required" ><?php echo $ALAMAT; ?></textarea>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="nama_peg">No Telepon</label>
                 <div class="form-label-group">
                  <input type="number" id="telp_peg" class="form-control" name="telp_peg" required="required" autofocus="autofocus" value="<?php echo $TELEPON; ?>">
                 </div>
              </div>
              <br>
              <div class="col-md-13">
                <label for="firstName">Jenis Kelamin</label>
                 <div class="form-label-group">
                  <input type="radio" name="jenis_kelamin_peg" value="pria" <?php if ($JENKEL=='Pria') {echo "checked";} ?>>Pria
                  <input type="radio" name="jenis_kelamin_peg" value="wanita" <?php if ($JENKEL=='Wanita') {echo "checked";} ?>>Wanita
                 </div>
              </div>
              <br>
              <div class="col-md-13">
                <label for="nama_peg">Status</label>
                 <div class="form-label-group">
                  <select class="form-control" name="type_user">
                  <option value="Admin" <?php if ($STATUS=='Admin') {echo "selected=\"selected\"";} ?>>Admin
                  </option>
                  <option value="Dokter" <?php if ($STATUS=='Dokter') {echo "selected=\"selected\"";} ?>>Dokter
                  </option>
                  <option value="Kasir" <?php if ($STATUS=='Kasir') {echo "selected=\"selected\"";} ?>>Kasir
                  </option>
                  <option value="Pendaftar" <?php if ($STATUS=='Pendaftar') {echo "selected=\"selected\"";} ?>>Pendaftar
                  </option>
                  </select>
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Username</label>
                 <div class="form-label-group">
                  <input type="text" id="username" class="form-control" name="username" required="required" autofocus="autofocus" value="<?php echo $USERNAME; ?>">
                 </div>
              </div>
              <div class="col-md-13">
                <label for="firstName">Password</label>
                 <div class="form-label-group">
                  <input type="password" id="password" class="form-control" name="password" required="required" autofocus="autofocus" value="<?php echo $PASSWORD; ?>">
                 </div>
              </div>
              <br>
              <div class="row">
              <div class="col-md-2">            
              <input type ="submit" name="edit" class="btn btn-primary btn-block" value="edit data">
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
