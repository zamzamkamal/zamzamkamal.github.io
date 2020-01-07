<div class="container-fluid">
       <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=periksa">Data Pemeriksa</a>
        </li>
          <li class="breadcrumb-item active">Detail Pemeriksaan</li>
        </ol>

      <center><h4><b>| Detail Pemeriksaan |</b></h4></center>

<?php
$KODE=$_GET['kode_pemeriksaan'];
$QUERY = mysqli_query($CONNECT,"SELECT tb_pemeriksaan.*,tb_pasien.*,tb_pendaftaran.* FROM tb_pendaftaran
INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran
INNER JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas WHERE tb_pemeriksaan.kode_pemeriksaan='$KODE'");
$ROW = @mysqli_fetch_array($QUERY)

?>
<hr class="garis">
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="payslip-title">Detail Pemeriksaan : </h4>
            <hr class="garis">
            <div class="row">
                <div class="col-sm-6 m-b-20">
                    <img src="../assets/img/logo-dark.png" class="inv-logo" alt="">
                    <ul class="list-unstyled mb-0">
                        <li><strong><h3>| <?php echo $DATA_INFO['nama_poliklinik']; ?> |</h3></strong></li>
                        <li><?php echo $DATA_INFO['alamat_poliklinik']; ?></li>
                        <li><?php echo $DATA_INFO['telp_poliklinik']; ?></li>
                    </ul>
                </div>
                <div class="col-sm-6 m-b-20">
                    <div class="invoice-details">
                        <h5>Kode Pemeriksaan #<?php echo $ROW['kode_pemeriksaan']; ?></h5>
                        <ul class="list-unstyled">
                            <li>Tanggal Registrasi : <span><?php echo $ROW['tanggal_reg']; ?></span></li>
                            <li>Tanggal Pemeriksaan : <span><?php echo $ROW['tanggal_pemeriksaan']; ?></span></li>
                            <li>No. Pendaftaran : <span><?php echo $ROW['no_urut']; ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 m-b-20">
                    <ul class="list-unstyled">
                        <li>
                            <h5 class="mb-0"><strong><?php echo $ROW['nama_pas'].' ('. $ROW['tanggal_lahir_pas'].')'; ?></strong></h5></li>
                        <li><span><?php echo $ROW['kode_pas']; ?></span></li>
                        <li><?php echo $ROW['alamat_pas']; ?></li>
                        <li><?php echo $ROW['telp_pas']; ?></li>
                    </ul>
                </div>
                <div class="col-lg-6 m-b-20">
                    <ul class="personal-info">
                        <li>
                            <h5 class="mb-0"><strong>Data Pasien</strong></h5></li>
                        <li>
                            <span class="title">Berat Badan </span>
                            <span class="text">: <?php echo $ROW['berat_badan']; ?></span>
                        </li>
                        <li>
                            <span class="title">Tensi Diastolik </span>
                            <span class="text">: <?php echo $ROW['tensi_diastolik']; ?></span>
                        </li>
                        <li>
                            <span class="title">Tensi Sistolik </span>
                            <span class="text">: <?php echo $ROW['tensi_sistolik']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="garis"><br>
<div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Keluhan</th>
                            <th>Diagnosa</th>
                            <th>Perawatan</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $ROW['keluhan']; ?></td>
                            <td><?php echo $ROW['diagnosa']; ?></td>
                            <td><?php echo $ROW['perawatan']; ?></td>
                            <td><?php echo $ROW['tindakan']; ?></td>

                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

     
<br>
<br>
<br>
<br>
