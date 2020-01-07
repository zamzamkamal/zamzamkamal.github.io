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