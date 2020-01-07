
 <div id="content-wrapper">
<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Pasien</li>
        </ol>

<center><h3><b>| Data Pasien |</b></h3></center>

    <div class="col-xl-3 col-sm-6 mb-3"> 
          <a class="btn btn-primary" href="index.php?page=pasien&aksi=tambah" data-toogle="tooltip" data-placement="bottom" title="Tambah Data">Tambah pasien</a>
          <a class="btn btn-success btn-rounded" href="../laporan/laporan_pasien.php" target="blank" title="laporan"><i class="fa fa-print"></i>laporan</a>
    </div>

<div class="card mb-3 ">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pasien</div>
          <div class="card-body">
            <div class="table-responsive">
           
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Pas</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Tgl Lahir</th>
                    <th>JK</th>
                    <th>Tanggal Regist</th>
                    <th>Action</th>
                  </tr>
 
                  <?php
                  $TAMPIL ="SELECT  *FROM tb_pasien";
                  $HASIL = mysqli_query($CONNECT,$TAMPIL);

                  $NO=1;

                  while ($ROW = mysqli_fetch_array($HASIL)) {
                    $NO;
                    $KODE         =$ROW['kode_pas'];
                    $NAMA         =$ROW['nama_pas'];
                    $ALAMAT       =$ROW['alamat_pas'];
                    $TELEPON      =$ROW['telp_pas'];
                    $TL           =$ROW['tanggal_lahir_pas'];
                    $JK           =$ROW['jenis_kelamin_pas'];
                    $TR           =$ROW['tanggal_reg'];
                  
                  ?>

                </thead>
                
                <body>
                 
                  <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $KODE; ?></td>
                    <td><?php echo $NAMA; ?></td>
                    <td><?php echo $ALAMAT; ?></td>
                    <td><?php echo $TELEPON; ?></td>
                    <td><?php echo $TL;  ?></td>
                    <td><?php echo $JK;  ?></td>
                    <td><?php echo $TR;  ?></td>
                    <td> 
     <a class="" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span>choose</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="index.php?page=pasien&aksi=edit&kode_pas=<?php echo $KODE; ?>">Edit</a>
            <a class="dropdown-item" href="index.php?page=pasien&aksi=hapus&kode_pas=<?php echo $KODE; ?>">Hapus</a>
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
 