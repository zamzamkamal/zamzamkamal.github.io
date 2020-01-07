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