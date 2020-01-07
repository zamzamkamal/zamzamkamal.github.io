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
            <h4 class="payslip-title">DETAIL PEMERIKSAAN</h4>
            <div class="row">
                <div class="col-sm-6 m-b-20">
                    <img src="../assets/img/logo-dark.png" class="inv-logo" alt="">
                    <ul class="list-unstyled mb-0">
                        <li><strong><?php echo $DATA_INFO['nama_poliklinik']; ?></strong></li>
                        <li><?php echo $DATA_INFO['alamat_poliklinik']; ?></li>
                        <li><?php echo $DATA_INFO['telp_poliklinik']; ?></li>
                    </ul>
                </div>
                <div class="col-sm-6 m-b-20">
                    <div class="invoice-details">
                        <h4 class="text-uppercase">Kode Pemeriksaan #<?php echo $ROW['kode_pemeriksaan']; ?></h4>
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
</div><br>
<div class="box-body">
  <table id="example2" class="table table-bordered">
            <thead>
                  <?php 
                   $TAMPIL = "SELECT *FROM tb_jenis_biaya";
                   $HASIL  = @mysqli_query($CONNECT, $TAMPIL)
                   ?> 
                    <tr>
                      <th>NO</th>
                      <th>Kode Jenis Biaya</th>
                      <th>Nama Biaya</th>
                      <th>Tarif</th>
                    </tr>
            </thead>
                <tbody>
                  <?php 
                    $NO=1;
                    while ($ROW = mysqli_fetch_array($HASIL)){ 
                    $KODE_JENIS_BIAYA     = $ROW['kode_jenis_biaya'];
                    $NAMA_BIAYA           = $ROW['nama_biaya'];
                    $TARIF                = $ROW['tarif'];
                   ?>
                </tbody>      
            <tr>
                <td><?php echo $NO;?></td>
                <td><?php echo $KODE_JENIS_BIAYA; ?></td>
                <td><?php echo $NAMA_BIAYA; ?></td>
                <td><?php echo   "RP."; echo $TARIF; ?></td>
                
            </tr>           
            <?php  
            $NO++;
            }
            ?>
  </table>
</div><br>
<div class="box-body">
            <table id="example2" class="table table-bordered">
                    <thead>
                          <?php 
                           $TAMPIL = "SELECT *FROM tb_obat";
                           $HASIL  = @mysqli_query($CONNECT, $TAMPIL)
                           ?> 
                        <tr>
                          <th>NO</th>
                          <th>Kode Obat</th>
                          <th>Nama Obat</th>
                          <th>merk</th>
                          <th>satuan</th>
                          <th>harga jual</th>
                        </tr>
                    </thead>
                <tbody>
                  <?php 
                    $NO=1;
                    while ($ROW = mysqli_fetch_array($HASIL)){ 
                    $KODE_OBAT   = $ROW['kode_obat'];
                    $NAMA_OBAT   = $ROW['nama_obat'];
                    $MERK        = $ROW['merk'];
                    $SATUAN      = $ROW['satuan'];
                    $HARGA_JUAL  = $ROW['harga_jual']
                   ?>
                </tbody>      
                    <tr>
                        <td><?php echo $NO;?></td>
                        <td><?php echo $KODE_OBAT; ?></td>
                        <td><?php echo $NAMA_OBAT; ?></td>
                        <td><?php echo $MERK; ?></td>
                        <td><?php echo $SATUAN; ?></td>
                        <td><?php echo $HARGA_JUAL; ?></td>
                    </tr>               
                    <?php  
                    $NO++;
                    }
                    ?>
              </table>
</div><br>
<div class="box-body">
              <table id="example2" class="table table-bordered">          
                              <?php 
                               $TAMPIL = "SELECT *FROM tb_resep";
                               $HASIL  = @mysqli_query($CONNECT, $TAMPIL)
                               ?> 
                        <tr>
                          <th>NO</th>
                          <th>Kode Resep</th>
                          <th>Dosis</th>
                          <th>Jumlah</th>
                        </tr>
                              <?php 
                                $NO=1;
                                while ($ROW = mysqli_fetch_array($HASIL)){ 
                                $SATU   = $ROW['kode_resep'];
                                $DUA    = $ROW['dosis'];
                                $TIGA   = $ROW['jumlah'];
                               ?>
                        <tr>
                            <td><?php echo $NO;?></td>
                            <td><?php echo $SATU; ?></td>
                            <td><?php echo $DUA; ?></td>
                            <td><?php echo $TIGA; ?></td>
                        </tr> 
                            <?php  
                            $NO++;
                            }
                            ?>
              </table>
</div>
