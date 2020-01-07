<div id="content-wrapper">
<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Dokter</li>
        </ol>

<center><h3><b>| Data Dokter |</b></h3></center>

    <div class="col-xl-3 col-sm-6 mb-3"> 
          <a class="btn btn-primary" href="index.php?page=dokter&aksi=tambah" data-toogle="tooltip" data-placement="bottom" title="Tambah Data">Tambah Dokter</a>
          <a class="btn btn-success btn-rounded" href="../laporan/laporan_dokter.php" target="blank" title="laporan"><i class="fa fa-print"></i>laporan</a>
    </div>

<div class="card mb-3 ">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Dokter</div>
          <div class="card-body">
            <div class="table-responsive">
           
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode dokter</th>
                        <th>Nama dokter</th>
                        <th>Alamat</th>
                        <th>No telp</th>
                        <th>Nama poli</th>
                        <th>Jadwal</th>
                        <th>Action</th>
                    </tr>

 
                  <?php 

                $TAMPIL = "SELECT * FROM tb_dokter INNER JOIN  tb_poliklinik ON tb_dokter.kode_poli=tb_poliklinik.kode_poli INNER JOIN tb_jadwal_praktik ON tb_dokter.kode_jadwal=tb_jadwal_praktik.kode_jadwal
                  ORDER BY tb_dokter.kode_dok ASC
                                            
                                ";

                $HASIL  = mysqli_query($CONNECT, $TAMPIL);

                $NO = 1;


                while ($ROW = mysqli_fetch_array($HASIL)) {


                    $NO;
                    $KODE_DOKTER    = $ROW['kode_dok'];
                    $KODE_POLI      = $ROW['kode_poli'];
                    $NAMADOK        = $ROW['nama_dok'];
                    $ALAMATDOK      = $ROW['alamat_dok'];
                    $TELEPONDOK     = $ROW['telp_dok'];                
                    $NAMA_POLI      = $ROW['nama_poli'];                
                    $HARI           = $ROW['hari'];                
                    $JAM_MULAI      = $ROW['jam_mulai'];                
                    $JAM_SELESAI    = $ROW['jam_selesai'];                


                    ?>
                  </thead>
                
                <body>
                 
                <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $KODE_DOKTER; ?></td>
                    <td><?php echo $NAMADOK; ?></td>
                    <td><?php echo $ALAMATDOK; ?></td>
                    <td><?php echo $TELEPONDOK; ?></td>
                    <td><?php echo $NAMA_POLI; ?></td>
                    <td><?php echo $HARI ; echo ","; echo $JAM_MULAI; echo "-"; echo $JAM_SELESAI; ?></td>
                    <td> 
     <a class="" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span>choose</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="index.php?page=dokter&aksi=edit&kode_dok=<?=$ROW['kode_dok']?>">Edit</a>
            <a class="dropdown-item" href="index.php?page=dokter&aksi=hapus&kode_dok=<?=$ROW['kode_dok']?>">Hapus</a>
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
 