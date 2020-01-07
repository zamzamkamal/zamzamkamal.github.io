<div class="container-fluid">
       <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=medis">Data Rekam Medis</a>
        </li>
          <li class="breadcrumb-item active">Detail Data</li>
        </ol>

      <center><h4><b>| Detail Data Rekam Medis |</b></h4></center>
      <hr class="garis">

<?php
$KODE=$_GET['kode_pemeriksaan'];
$QUERY = mysqli_query($CONNECT,"SELECT tb_pemeriksaan.*,tb_pasien.*,tb_pendaftaran.* FROM tb_pendaftaran
INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran
INNER JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas WHERE tb_pemeriksaan.kode_pemeriksaan='$KODE'");
$ROW = @mysqli_fetch_array($QUERY)

?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="payslip-title">Detail Data Rekam Medis : </h4>
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
            <hr class="garis"><br><br>
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
</div><br><br>
          <center><h4>| Rincian Biaya Pasien |</h4></center>
          <br>
<div class="box-body">
  <table id="example2" class="table table-bordered">
                               <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Biaya</th>
                                            <th>Tarif</th>
                                            <th>Kode Pemeriksaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                $query_biaya = mysqli_query($CONNECT,"SELECT tb_rekam_medis_biaya.*, tb_jenis_biaya.*
                                FROM tb_rekam_medis_biaya
                                INNER JOIN tb_jenis_biaya on tb_rekam_medis_biaya.kode_jenis_biaya = tb_jenis_biaya.kode_jenis_biaya WHERE kode_pemeriksaan = '$KODE' ");
                                $no = 1;
                                while ($data_biaya = @mysqli_fetch_array($query_biaya))
                                {
                                    $tarif = $data_biaya['tarif'];
                                    $hasil = $tarif + $tarif;
                            ?>                    
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $data_biaya['nama_biaya'] ;?></td>
                                <td><?php echo "Rp.".$data_biaya['tarif'] ; ?></td>
                                <td><?php echo $data_biaya['kode_pemeriksaan'] ;?></td>
                            </tr>
                            <?php
                            $no++;
                            };
                            ?> 
</table>
<!-- total Data -->
        <?php
        $query_total = mysqli_query($CONNECT, "SELECT tb_rekam_medis_biaya.kode_jenis_biaya, tb_jenis_biaya.kode_jenis_biaya, SUM(tarif) AS tarif FROM tb_rekam_medis_biaya
            INNER JOIN tb_jenis_biaya ON tb_rekam_medis_biaya.kode_jenis_biaya = tb_jenis_biaya.kode_jenis_biaya
            WHERE tb_rekam_medis_biaya.kode_pemeriksaan='$KODE'");
        $data_total = mysqli_fetch_assoc($query_total);
        $sum = $data_total['tarif'];
          ?>
          <h5>Total Biaya Pasien : Rp. <?php echo number_format($sum, 0, ',', '.'); ?>, 00</h5>
    </blockquote>
<!-- akhir total Data -->
            <br><br>

          <center><h4>| Rincian Obat Pasien |</h4></center>
          <br>
<div class="box-body">
            <table id="example2" class="table table-bordered">
                   <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Merk</th>
                                            <th>Satuan</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                $obat = mysqli_query($CONNECT,"SELECT tb_rekam_medis_obat.*, tb_obat.*
                                FROM tb_rekam_medis_obat
                                INNER JOIN tb_obat on tb_rekam_medis_obat.kode_obat = tb_obat.kode_obat
                                WHERE kode_pemeriksaan_obat = '$KODE' ");
                                $no = 1;
                                while ($row = @mysqli_fetch_array($obat))
                                {
                                    $nama_obat  = $row['nama_obat'];
                                    $merek_obat = $row['merk'];
                                    $satuan     = $row['satuan']; 
                                    $harga_jual = $row['harga_jual']
                            ?>                    
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $nama_obat;?></td>
                                <td><?php echo $merek_obat; ?></td>
                                <td><?php echo $satuan;?></td>
                                <td><?php echo "Rp.".$harga_jual;?></td>
                            </tr>
                            <?php
                            $no++;
                            };
                            ?> 
              </table>
              <!-- total Data -->
        <?php
        $query_total = mysqli_query($CONNECT, "SELECT tb_rekam_medis_obat.kode_obat, tb_obat.kode_obat, SUM(harga_jual) AS harga_jual FROM tb_rekam_medis_obat
            INNER JOIN tb_obat ON tb_rekam_medis_obat.kode_obat = tb_obat.kode_obat
            WHERE tb_rekam_medis_obat.kode_pemeriksaan_obat='$KODE'");
        $data_total = mysqli_fetch_assoc($query_total);
        $sum = $data_total['harga_jual'];
          ?>
          <h5>Total Harga Obat : Rp. <?php echo number_format($sum, 0, ',', '.'); ?>, 00</h5>
    </blockquote><br><br>

              <center><h4>| Rincian Resep Obat |</h4></center>
              <br>
<div class="box-body">
              <table id="example2" class="table table-bordered">          
                                  <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Dosis</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                $obat = mysqli_query($CONNECT,"SELECT tb_rekam_medis_resep.*, tb_resep.*
                                FROM tb_rekam_medis_resep
                                INNER JOIN tb_resep on tb_rekam_medis_resep.kode_resep = tb_resep.kode_resep
                                WHERE kode_pemeriksaan_resep = '$KODE' ");
                                $no = 1;
                                while ($row = @mysqli_fetch_array($obat))
                                {
                                    $dosis  = $row['dosis'];
                                    $jumlah = $row['jumlah'];
                                     
                                    
                            ?>                    
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $dosis;?></td>
                                <td><?php echo $jumlah; ?></td>
                            </tr>
                            <?php
                            $no++;
                            };
                            ?> 
              </table>
<br>
<br>
<br>
<br>
