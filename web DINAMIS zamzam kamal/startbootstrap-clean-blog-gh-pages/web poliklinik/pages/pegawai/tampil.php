
<div id="content-wrapper">
<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Pegawai</li>
        </ol>

<center><h3><b>| Data Pegawai |</b></h3></center>

    <div class="col-xl-3 col-sm-6 mb-3"> 
          <a class="btn btn-primary" href="index.php?page=pegawai&aksi=tambah" data-toogle="tooltip" data-placement="bottom" title="Tambah Data">Tambah Peg</a>
          <a class="btn btn-success btn-rounded" href="../laporan/laporan_pegawai.php" target="blank" title="laporan"><i class="fa fa-print"></i>laporan</a>
    </div>

<div class="card mb-3 ">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pegawai</div>
          <div class="card-body">
            <div class="table-responsive">
           
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="10%">No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.telp</th>
                    <th>JK</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
 
                  <?php
                  $TAMPIL ="SELECT tb_pegawai.*,tb_login.* FROM tb_pegawai 
                  INNER JOIN tb_login on tb_login.nip=tb_pegawai.nip ORDER BY tb_pegawai.nip ASC";
                  $HASIL = mysqli_query($CONNECT,$TAMPIL);

                  $NO=1;

                  while ($ROW = mysqli_fetch_array($HASIL)) {
                    $NO;
                    $NIP    =$ROW['nip'];
                    $NAMA   =$ROW['nama_peg'];
                    $ALAMAT =$ROW['alamat_peg'];
                    $NO_TLP =$ROW['telp_peg'];
                    $JK     =$ROW['jenis_kelamin_peg'];
                    $STATUS =$ROW['type_user'];
                  
                  ?>

                </thead>
                
                <body>
                 
                  <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $NIP; ?></td>
                    <td><?php echo $NAMA; ?></td>
                    <td><?php echo $ALAMAT; ?></td>
                    <td><?php echo $NO_TLP; ?></td>
                    <td><?php echo $JK; ?></td>
                    <td><?php echo $STATUS; ?></td> 
                    <td> 
     <a class="" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span>choose</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="index.php?page=pegawai&aksi=edit&nip=<?php echo $NIP; ?>">Edit</a>
            <a class="dropdown-item" href="index.php?page=pegawai&aksi=hapus&nip=<?php echo $NIP; ?>">Hapus</a>
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
 