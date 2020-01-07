
 <div id="content-wrapper">
<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Pendaftar</li>
        </ol>

<center><h3><b>| Data Pendaftar |</b></h3></center>

    <div class="col-xl-3 col-sm-6 mb-3"> 
          <a class="btn btn-primary" href="index.php?page=pendaftar&aksi=tambah" data-toogle="tooltip" data-placement="bottom" title="Tambah Data">Tambah Daftar</a>
          <a class="btn btn-success btn-rounded" href="../laporan/laporan_pendaftar.php" target="blank" title="laporan"><i class="fa fa-print"></i>laporan</a>
    </div>

<div class="card mb-3 ">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pendaftar</div>
          <div class="card-body">
            <div class="table-responsive">
           
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>NO</th>
                  <th>Tanggal</th>
                  <th>No Urut</th>
                  <th>Nama Pegawai</th>
                  <th>Nama Pasien</th>
                  <th>Jadwal</th>
                  <th>Action</th>
                </tr>

                <?php 
                   $query = mysqli_query($CONNECT,"SELECT tb_pendaftaran.*, tb_pasien.*, tb_pegawai.*, tb_jadwal_praktik.* FROM tb_pendaftaran
                   JOIN tb_pegawai on tb_pendaftaran.nip = tb_pegawai.nip
                   JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas
                   JOIN tb_jadwal_praktik on tb_jadwal_praktik.kode_jadwal = tb_pendaftaran.kode_jadwal 
                   ORDER BY tb_pendaftaran.no_pendaftaran ASC ");
                   $no = 1;
                   while   ($data = @mysqli_fetch_array($query))
                   { 
                   ?> 

                </thead>
 
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['tanggal_reg'] ?></td>
                    <td><?php echo $data['no_urut']?></td>
                    <td><?php echo $data['nama_peg'] ?></td>
                    <td><?php echo $data['nama_pas'] ?></td>
                    <td><?php echo $data['hari'].", ".$data['jam_mulai']."- ".$data['jam_selesai'] ;?></td>
                    <td> 
     <a class="" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span>choose</span>
      </a>
<div class="dropdown-menu" aria-labelledby="pagesDropdown">
<a class="dropdown-item" href="index.php?page=pendaftar&aksi=edit&no_pendaftaran=<?php echo $data['no_pendaftaran'];  ?>">Edit</a>
<a class="dropdown-item" href="index.php?page=pendaftar&aksi=hapus&no_pendaftaran=<?php echo $data['no_pendaftaran'];  ?>">Hapus</a>
</div>

                      </div>
                  
                    </td>
                  </tr>
       
                </body>

 <?php  
$no++;
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
 