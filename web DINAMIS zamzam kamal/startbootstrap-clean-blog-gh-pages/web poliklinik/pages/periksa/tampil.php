
<div id="content-wrapper">
<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Pemeriksa</li>
        </ol>

<center><h3><b>| Data Pemeriksa |</b></h3></center>

    <div class="col-xl-3 col-sm-6 mb-3"> 
          <a class="btn btn-primary" href="index.php?page=periksa&aksi=tambah" data-toogle="tooltip" data-placement="bottom" title="Tambah Data">Tambah Per</a>
          <a class="btn btn-success btn-rounded" href="../laporan/laporan_pemeriksaan.php" target="blank" title="laporan"><i class="fa fa-print"></i>laporan</a>
    </div>

<div class="card mb-3 ">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pemeriksa</div>
          <div class="card-body">
            <div class="table-responsive">
           
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="10%">No</th>
                    <th>Kode Pemeriksa</th>
                    <th>Tgl</th>
                    <th>Kode pasien</th>
                    <th>Nama pasien</th>
                    <th>Diagnosa</th>
                    <th>Action</th>
                  </tr>
 
                  <?php
                  $TAMPIL ="SELECT tb_pemeriksaan.*,tb_pasien.*,tb_pendaftaran.* FROM tb_pendaftaran
                            INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran
                            INNER JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas ORDER BY tb_pemeriksaan.kode_pemeriksaan ASC";
                  $HASIL = mysqli_query($CONNECT,$TAMPIL);

                  $NO=1;

                  while ($ROW = mysqli_fetch_array($HASIL)) {
                    $NO;
                    $KODE           =$ROW['kode_pemeriksaan'];
                    $TP             =$ROW['tanggal_pemeriksaan'];
                    $PASIEN         =$ROW['kode_pas'];
                    $NAMA           =$ROW['nama_pas'];
                    $DIAG           =$ROW['diagnosa'];                   

                  ?>

                </thead>
                
                <body>
                 
                  <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $KODE; ?></td>
                    <td><?php echo $TP; ?></td>
                    <td><?php echo $PASIEN; ?></td>
                    <td><?php echo $NAMA; ?></td>
                    <td><?php echo $DIAG; ?></td> 
                    <td> 
     <a class="" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span>choose</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
    <a class="dropdown-item" href="index.php?page=periksa&aksi=edit&kode_pemeriksaan=<?php echo $KODE; ?>">Edit</a>
    <a class="dropdown-item" href="index.php?page=periksa&aksi=hapus&kode_pemeriksaan=<?php echo $KODE; ?>">Hapus</a>
    <a class="dropdown-item" href="index.php?page=periksa&aksi=detail&kode_pemeriksaan=<?php echo $KODE; ?>">Detail</a>
    <a class="dropdown-item" href="../laporan/laporan_pemeriksaan_detail1.php?kode_pemeriksaan=<?php echo $KODE; ?>" target="blank" >laporan detail</a>
      </div>

                      </div>
                  
                    </td>
                  </tr>
       
                </body>

 <?php  
$NO++;
}
?>                       
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
</div>
</div>
 