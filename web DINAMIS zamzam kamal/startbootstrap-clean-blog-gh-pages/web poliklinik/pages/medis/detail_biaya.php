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