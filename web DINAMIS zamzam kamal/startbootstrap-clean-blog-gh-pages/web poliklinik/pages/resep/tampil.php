<div id="content-wrapper">
<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Resep</li>
        </ol>

<center><h3><b>| Data Resep |</b></h3></center>

    <div class="col-xl-3 col-sm-6 mb-3"> 
          <a class="btn btn-primary" href="index.php?page=resep&aksi=tambah" data-toogle="tooltip" data-placement="bottom" title="Tambah Data">Tambah Resep</a>
          <a class="btn btn-success btn-rounded" href="../laporan/laporan_resep.php" target="blank" title="laporan"><i class="fa fa-print"></i>laporan</a>
    </div>

<div class="card mb-3 ">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Resep</div>
          <div class="card-body">
            <div class="table-responsive">
           
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="10%">No</th>
                    <th>Kode Resep</th>
                    <th>Dosis</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                  </tr>
 
                  <?php
                  $TAMPIL ="SELECT  *FROM tb_resep";
                  $HASIL = mysqli_query($CONNECT,$TAMPIL);

                  $NO=1;

                  while ($ROW = mysqli_fetch_array($HASIL)) {
                    $NO;
                    $KODE         =$ROW['kode_resep'];
                    $DOSIS        =$ROW['dosis'];
                    $JUMLAH       =$ROW['jumlah'];
                  
                  ?>

                </thead>
                
                <body>
                 
                 <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $KODE; ?></td>
                    <td><?php echo $DOSIS; ?></td>
                    <td><?php echo $JUMLAH; ?></td>
                    <td> 
     <a class="" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span>choose</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="index.php?page=resep&aksi=edit&kode_resep=<?php echo $KODE; ?>">Edit</a>
          <a class="dropdown-item" href="index.php?page=resep&aksi=hapus&kode_resep=<?php echo $KODE; ?>">Hapus</a>
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
 