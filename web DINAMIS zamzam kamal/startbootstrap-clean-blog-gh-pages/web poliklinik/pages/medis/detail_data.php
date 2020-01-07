<div class="container-fluid">
       <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
          <a href="?page=medis">Data Rekam Medis</a>
        </li>
          <li class="breadcrumb-item active">Rincian Transaksi</li>
        </ol>

      <center><h3><b>| Rincian Transaksi |</b></h3></center>
<hr class="garis">
<br>
<h3>DETAIL PEMERIKSAAN : </h3><br> 
<?php  
 @$KODE = $_GET['kode_pemeriksaan'];
?>
<?php 
$KODE = $_GET['kode_pemeriksaan'];
$EDIT=" SELECT tb_pemeriksaan.*,tb_pasien.*,tb_pendaftaran.* FROM tb_pendaftaran 
        INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran 
        INNER JOIN tb_pasien ON tb_pasien.kode_pas = tb_pendaftaran.kode_pas
        WHERE tb_pemeriksaan.kode_pemeriksaan='$KODE'";
$hasil=mysqli_query($CONNECT,$EDIT);
while ($DATA=mysqli_fetch_array($hasil)) {
$NO;
$KODE         =   $DATA['kode_pemeriksaan'];
$DAFTAR       =   $DATA['no_pendaftaran'];
$KELUHAN      =   $DATA['keluhan'];
$DIAG         =   $DATA['diagnosa'];
$NAMA_PAS     =   $DATA['nama_pas'];
}
?>

<div class="panel panel-default">
    <div class="panel-body">
        <!-- Baris ke 2 -->
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xl-12">
               <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                            <tr> 
                                <td><b><h3>#<?php echo $KODE; ?></h3></b></td>
                            </tr>
                            <tr>
                                <td><b>Nama Pasien</td></b>
                                <td width="10">:</td>
                                <td><?php echo $NAMA_PAS; ?></td>
                            </tr>
                            <tr>
                                <td><b>Keluhan</td></b>
                                <td>:</td>
                                <td><?php echo $KELUHAN; ?></td>
                            </tr>
                            <tr>
                                <td><b>Diagnosa</td></b>
                                <td>:</td>
                                <td><?php echo $DIAG; ?></td>
                            </tr>
                            <tr>
                                <td><b>Rincian</td></b>
                                <td>:</td>
                                <td>
                                    <?php 
                              if ($DATA['rincian_pemeriksaan']== 0) {
                                echo "<span class='label label-warning'>Belum Konfirmasi</span>";
                              }
                              elseif ($DATA['rincian_pemeriksaan']== 1) {
                                echo "<span class='label label-info'>Konfirmasi Berhasil</span>";
                              }
                            ?>  
                        </td>
                            </tr>
                            <tr>
                                <td><b>Status</td></b>
                                <td>:</td>
                                <td>
                                  <?php 
                              if ($DATA['status_pemeriksaan']== 0) {
                                echo "<span class='label label-danger'>Belum Transaksi</span>";
                              }
                              elseif ($DATA['status_pemeriksaan']== 1) {
                                echo "<span class='btn btn-success'>Transaksi Berhasil</span>";
                              }
                            ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    <br>
  <br>

<hr class="garis">
    <div class="col-md-12">
                    <!-- Nav tabs -->
          <div class="row">          
          <ul class="nav nav-tabs">

          <ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul>

              <li class="active"><a href="#home" data-toggle="tab"><button class="btn btn-blue btn-bordered"><b><h4>| Biaya Pasien |</button></a></li></b></h4>
              <li><a href="#profile" data-toggle="tab"><button class="btn btn-white btn-blue"><b><h4>| Obat Pasien |</button></a></li></b></h4>
              <li><a href="#about" data-toggle="tab"><button class="btn btn-white btn-blue"><b><h4>| Resep Obat |</button></a></li></b></h4>

          <ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul>
          
          </ul>
          </div>
          <br>
          <br>       


                      <!-- AWAL Biaya Pasien Santuy -->
                <div class="tab-content mb30">
                    <div class="tab-pane active" id="home">
            <form  role="form" method="POST" action="../pages/medis/proses_tambah_biaya.php?page=rekam_medis&aksi=detail&id=<?php echo $KODE; ?>">
                     <div class="box-body">
                        <h4><b>Biaya Pasien :</b></h4><br>
                        <select class="form-control" name="kode_jenis_biaya" id="kode_jenis_biaya" onchange="changeValueBiaya(this.value)" required="" >
                                <option value="0" required>-- Pilih Biaya --</option>
                                    <?php
                                    $result = mysqli_query($CONNECT,"SELECT * FROM `tb_jenis_biaya`");
                                    $jsArray = "var biaya = new Array();\n";
                                    while ($ROW = mysqli_fetch_array($result)) {
                                        echo '<option name="kode_jenis_biaya" value="'.$ROW['kode_jenis_biaya'].'">'.$ROW['kode_jenis_biaya'].' - '.$ROW['nama_biaya'].'</option>';
                                        $jsArray .= "biaya['" . $ROW['kode_jenis_biaya'] . "'] = {nama_biaya:'" . addslashes($ROW['nama_biaya']) . "',tarif:'".addslashes($ROW['tarif'])."'};\n";
                                    }
                                    ?>
                              </select>
                        
                        <div class="form-group">
                          <label> Nama Pemeriksaan</label>
                          <input type="text" class="form-control" id="nama_biaya" name="nama_biaya" required readonly>
                        </div>

                        <div class="form-group">
                          <label> Tarif</label>
                          <input type="text" class="form-control" id="tarif" name="tarif" required readonly>
                        </div>

                        <script type="text/javascript">
                                <?php echo $jsArray; ?>
                                function changeValueBiaya(kode_jenis_biaya){
                                document.getElementById('nama_biaya').value = biaya[kode_jenis_biaya].nama_biaya;
                                document.getElementById('tarif').value = biaya[kode_jenis_biaya].tarif;
                                };
                              </script>
                    </div>

                    <div class="box-footer">
                    <input type="submit" name="#" class="btn btn-primary">
                    </div>
                    <br>
                    <br>
                    <br>
            </form>

            <!-- Awal Tabel Biaya -->
                    <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Biaya</th>
                                            <th>Tarif</th>
                                            <th>Kode Pemeriksaan</th>
                                            <th>Action</th>
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
                                <td>
                                      <a href="../pages/medis/hapus_biaya.php?id=<?php echo $data_biaya['id_rekam_medis_biaya'];?>">Delete</i></a></li>     
                                </td>
                            </tr>
                            <?php
                            $no++;
                            };
                            ?> 
                    </table>
              </div>
              <!-- Akhir Tabel Biaya -->

<!-- total Data -->
              <hr class="garis">
        <?php
        $query_total = mysqli_query($CONNECT, "SELECT tb_rekam_medis_biaya.kode_jenis_biaya, tb_jenis_biaya.kode_jenis_biaya, SUM(tarif) AS tarif FROM tb_rekam_medis_biaya
            INNER JOIN tb_jenis_biaya ON tb_rekam_medis_biaya.kode_jenis_biaya = tb_jenis_biaya.kode_jenis_biaya
            WHERE tb_rekam_medis_biaya.kode_pemeriksaan='$KODE'");
        $data_total = mysqli_fetch_assoc($query_total);
        $sum = $data_total['tarif'];
          ?>
          <h4>Total Biaya Pasien : Rp. <?php echo number_format($sum, 0, ',', '.'); ?>, 00</h4>
    </blockquote>
              <hr class="garis">
<!-- akhir total Data -->
              </div>
                  
                  <!-- AKHIR Biaya Pasien Santuy-->

                  <!-- AWAL Obat Pasien Santuy-->
                      <div class="tab-pane" id="profile">       
              
            <form  role="form" method="POST" action="../pages/medis/proses_tambah_obat.php?page=medis&aksi=detail&id=<?php echo $KODE; ?>">

                     <div class="box-body">
                      <h4><b>Obat Pasien :</b></h4><br>
                        <select class="form-control" name="kode_obat" id="kode_obat" onchange="changeValueObat(this.value)" required="" >

                                <option value="0" required>-- Pilih Obat --</option>
                                    <?php
                                    $result1 = mysqli_query($CONNECT,"SELECT * FROM `tb_obat`");
                                    $jsArray1 = "var obat = new Array();\n";
                                    while ($ROW = mysqli_fetch_array($result1)) {
                                    echo '<option name="kode_obat" value="'.$ROW['kode_obat'].'">
                                    '.$ROW['kode_obat'].' - '.$ROW['nama_obat'].'
                                    - '.$ROW['merk'].' - '.' Rp '.$ROW['harga_jual'].'</option>';
                                        


                                    $jsArray1 .= "obat['" . $ROW['kode_obat'] . "'] = {
                                    nama_obat:'" . addslashes($ROW['nama_obat']) . "',
                                    merk:'".addslashes($ROW['merk'])."',
                                    satuan:'".addslashes($ROW ['satuan'])."',
                                    harga_jual:'".addslashes($ROW['harga_jual'])."'
                                    };\n";
                                    }
                                    ?>
                              </select>

                        <div class="form-group">
                          <label> Nama Obat</label>
                          <input type="text" class="form-control" id="nama_obat" name="nama_obat" required readonly>
                        </div>

                        <div class="form-group">
                          <label> Merk</label>
                          <input type="text" class="form-control" id="merk" name="merk" required readonly>
                        </div>

                      <div class="form-group">
                          <label> Satuan</label>
                          <input type="text" class="form-control" id="satuan" name="satuan" required readonly>
                        </div>

                        <div class="form-group">
                          <label> Harga</label>
                          <input type="text" class="form-control" id="harga_jual" name="harga_jual" required readonly>
                        </div>

                        <script type="text/javascript">
                                <?php 
                                  echo $jsArray1;
                                ?>
                                function changeValueObat(kode_obat){
                                  document.getElementById('nama_obat').value = obat[kode_obat].
                                  nama_obat;
                                  document.getElementById('merk').value = obat[kode_obat].
                                  merk;
                                  document.getElementById('satuan').value = obat[kode_obat].
                                  satuan;
                                  document.getElementById('harga_jual').value = obat[kode_obat].
                                  harga_jual;
                                }
                              </script>

                    </div>

                    <div class="box-footer">
                        <input type="submit" name="#" class="btn btn-primary">
                     </div>
          <br>
          <br>
          <br>   
            </form>

                <!-- Awal tabel obat -->
            <div class="table-responsive">
                                <table class="table m-b-0 table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Merk</th>
                                            <th>Satuan</th>
                                            <th>Harga</th>
                                            <th>Action</th>
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
                                <td>
                                      <a href="../pages/medis/hapus_obat.php?id=<?php echo $row['id_rekam_medis_obat'];?>">Delete</i></a></li>     
                                </td>
                            </tr>
                            <?php
                            $no++;
                            };
                            ?> 

                                    </tbody>
                                </table>
                            </div>
                            <!-- Akhir Tabel Obat -->

<!-- total Data -->
              <hr class="garis">
        <?php
        $query_total = mysqli_query($CONNECT, "SELECT tb_rekam_medis_obat.kode_obat, tb_obat.kode_obat, SUM(harga_jual) AS harga_jual FROM tb_rekam_medis_obat
            INNER JOIN tb_obat ON tb_rekam_medis_obat.kode_obat = tb_obat.kode_obat
            WHERE tb_rekam_medis_obat.kode_pemeriksaan_obat='$KODE'");
        $data_total = mysqli_fetch_assoc($query_total);
        $sum = $data_total['harga_jual'];
          ?>
          <h4>Total Harga Obat : Rp. <?php echo number_format($sum, 0, ',', '.'); ?>, 00</h4>
    </blockquote>
              <hr class="garis">
<!-- akhir total Data -->
                                    </div>

                      <!-- AKHIR Obat Pasien Santuy-->

                      <!-- AWAL Resep Obat Santuy-->
                                  
                                    <div class="tab-pane" id="about">
                    
                    <form  role="form" method="POST" action="../pages/medis/proses_tambah_resep.php?page=medis&aksi=detail&id=<?php echo $KODE; ?>">
                     
                            <div class="box-body">
                            <h4><b>Resep Obat :</b></h4><br>
                                <select class="form-control" name="kode_resep" id="kode_resep" onchange="changeValueResep(this.value)" required="" >
                                        <option value="0" required>-- Pilih Resep --</option>
                                            <?php

                                            $result2= mysqli_query($CONNECT,"SELECT * FROM `tb_resep`");

                                            $jsArray2 = "var resep = new Array();\n";

                                            while ($ROW = mysqli_fetch_array($result2)) {

                                                echo '<option name="kode_resep" value="'.$ROW['kode_resep'].'">
                                                '.$ROW['kode_resep'].' - '.$ROW['dosis'].'
                                                 - '.$ROW['jumlah'].' </option>';
                                                


                                                $jsArray2 .= "resep['" . $ROW['kode_resep'] . "'] = {
                                                  dosis:'" . addslashes($ROW['dosis']) . "',
                                                  jumlah:'".addslashes($ROW['jumlah'])."'
                                                  };\n";
                                            }
                                            ?>
                                      </select>

                              <div class="form-group">
                                <label> Jumlah Dosis</label>
                                <input type="text" class="form-control" id="dosis" name="dosis" required readonly>
                              </div>

                              <div class="form-group">
                                <label> Jumlah Obat</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" required readonly>
                              </div>

                              <script type="text/javascript">
                                      <?php 
                                        echo $jsArray2;
                                      ?>
                                      function changeValueResep(kode_resep){
                                        document.getElementById('dosis').value = resep[kode_resep].
                                        dosis;
                                        document.getElementById('jumlah').value = resep[kode_resep].
                                        jumlah;
                                      }
                                    </script>

                          </div>
                          <div class="box-footer">
                              <input type="submit" name="#" class="btn btn-primary">
                            </div>
          <br>
          <br> 
          <br>                              
            </form>

                <!-- Awal Tabel Resep -->
            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                   <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Dosis</th>
                                            <th>Jumlah</th>
                                            <th>Action</th>
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
                                <td>
                                      <a href="../pages/medis/hapus_resep.php?id=<?php echo $row['id_rekam_medis_resep'];?>">Delete</i></a></li>     
                                </td>
                            </tr>
                            <?php
                            $no++;
                            };
                            ?> 
                                </table>
                            </div>
                                    </div><!-- tab-pane -->
                                </div><!-- tab-content -->
                            </div><!-- col-md-6 -->

                              <!-- Akhir Tabel Resep -->

                        <!-- AKHIR Resep Obat Santuy-->
    </div>  

</div>
<br>
    <div class="text-right btn-invoice">
        <a href="index.php?page=medis"><button class="btn btn-danger btn-bordered">Back</button></a>
        <a href="#"><button class="btn btn-success btn-bordered">Back to top</button></a>
    </div>
<br>
<br>
<br>
<br>    