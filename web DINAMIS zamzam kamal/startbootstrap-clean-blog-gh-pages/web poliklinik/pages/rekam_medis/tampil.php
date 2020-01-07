<div id="content-wrapper">
<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Rekam Medis</li>
        </ol>

<center><h3><b>| Data Rekam Medis |</b></h3></center>
    <div class="col-xl-3 col-sm-6 mb-3"> 
          <a class="btn btn-primary" href="index.php?page=periksa&aksi=tambah" data-toogle="tooltip" data-placement="bottom" title="Tambah Data">Tambah Pemeriksa</a>
          <a class="btn btn-success btn-rounded" href="../laporan/laporan_medis.php" target="blank" title="laporan"><i class="fa fa-print"></i>laporan</a>
    </div>

<div class="card mb-3 ">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Rekam Medis</div>
          <div class="card-body">
            <div class="table-responsive">
           
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                     <tr>
                        <th>No</th>
                        <th>Kode Pemeriksa</th>   
                        <th>Kode Pasien</th>   
                        <th>Nama</th>   
                        <th>Alamat</th>    
                        <th>Rincian</th>
                        <th>Status</th>      
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
                    $PERIKSA            =$ROW['kode_pemeriksaan'];
                    $PASIEN             =$ROW['kode_pas'];
                    $NAMA               =$ROW['nama_pas'];
                    $ALAMAT             =$ROW['alamat_pas'];                   

                  ?>

                  </thead>
                
                <body>
                 
               <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $PERIKSA; ?></td>
                    <td><?php echo $PASIEN; ?></td>
                    <td><?php echo $NAMA; ?></td>
                    <td><?php echo $ALAMAT; ?></td>
                    <td>
                <?php
                    if ($ROW['rincian_pemeriksaan']== 0) {
                    echo "<span class='alert alert-danger'>Belum Konfirmasi</span>" ;
                    }
                    elseif ($ROW['rincian_pemeriksaan']== 1) {
                    echo "<span class='alert alert-success'>Sudah Konfirmasi</span>" ;
                    }
                    ?>
                    </td>
                    <td>
                    <?php
                    if ($ROW['status_pemeriksaan']== 0) {
                    echo "<span class='alert alert-danger'>Belum Transaksi</span>" ;
                    }
                    elseif ($ROW['status_pemeriksaan']== 1) {
                    echo "<span class='alert alert-success'>Sudah Transaksi</span>" ;
                    }
                    ?>    
                    </td>

                    <td>
                    <?php
                    if ($ROW['rincian_pemeriksaan']== 0) { ?>
                    <a class="" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>choose</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="index.php?page=medis&aksi=detail_data&kode_pemeriksaan=<?php echo $ROW['kode_pemeriksaan']; ?>">Rincian Transaksi</a>
                    <a class="dropdown-item" href="index.php?page=medis&aksi=konfirmasi&id=<?php echo $ROW['kode_pemeriksaan'];?>&value=1"></i> Konfirmasi Rincian</a>
                                            
                    </div>
                    <?php  
                    }
                    elseif ($ROW['rincian_pemeriksaan']== 1) { ?>


                    <a class="" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>choose</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">  
                    <a class="dropdown-item" href="index.php?page=medis&aksi=detail&kode_pemeriksaan=<?php echo $ROW['kode_pemeriksaan']; ?>">Data Detail</a>                                            
                    <a class="dropdown-item" href="../laporan/laporan_pemeriksaan_detail2.php?id=<?php echo $ROW['kode_pemeriksaan']; ?>" target="_blank"></i> Print Detail</a>
                    </div>
                    <?php
                    }
                    ?>
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
 