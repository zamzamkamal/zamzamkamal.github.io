<?php
include '../inc/koneksi.php';
include '../inc/informasi.php';
?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $DATA_INFO['nama_poliklinik']; ?></title>

  <!-- Custom fonts for this template-->
  <link href="../tampil/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../tampil/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../tampil/css/sb-admin.css" rel="stylesheet">

</head>
<body onload="window.print();">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href=""><b>Laporan Pendaftar</a></b>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <a class="btn btn-success btn-rounded" href="">Print</a>
      </div>
    </form>
    <a class="btn btn-primary" href="../pendaftar/index.php?page=pendaftar">Close</a>
  </nav>

<div class="container">
  
        <div class="col-xs-12">
          <?php include @'kop_laporan.php' ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <tr>
                  <th>NO</th>
                  <th>Tanggal</th>
                  <th>No Urut</th>
                  <th>Nama Pegawai</th>
                  <th>Nama Pasien</th>
                  <th>Jadwal</th>
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
                    </li>
                    </td>
                  </tr>
       
                </tbody>
 <?php  
$no++;
}
?>                       
              </table>
            </div>
          </div>
</div>
  </div>
</div>
</div><br><br>

       <!-- /.box -->



        </div>
      </li>
   
      
    </ul>

        <div id="content-wrapper">

      <div class="container-fluid">




  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
 

  <!-- Bootstrap core JavaScript-->
  <script src="../Admin/vendor/jquery/jquery.min.js"></script>
  <script src="../Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../Admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../Admin/vendor/chart.js/Chart.min.js"></script>
  <script src="../Admin/vendor/datatables/jquery.dataTables.js"></script>
  <script src="../Admin/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../Admin/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../Admin/js/demo/datatables-demo.js"></script>
  <script src="../Admin/js/demo/chart-area-demo.js"></script>

</body>

</html>
<br>
<br>
<br>
<br>
