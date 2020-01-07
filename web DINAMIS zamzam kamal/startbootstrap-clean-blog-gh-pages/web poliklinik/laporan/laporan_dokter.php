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

    <a class="navbar-brand mr-1" href=""><b>Laporan Dokter</a></b>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <a class="btn btn-success btn-rounded" href="">Print</a>
      </div>
    </form>
    <a class="btn btn-primary" href="../admin/index.php?page=dokter">Close</a>
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
                                        <th>No</th>
                                        <th>Kode dokter</th>
                                        <th>Nama dokter</th>
                                        <th>Alamat</th>
                                        <th>No telp</th>
                                        <th>Nama poli</th>
                                        <th>Jadwal</th>
                                    </tr>
                                </thead>
 
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

                                    <tr>
                                        <td><?php echo $NO; ?></td>
                                        <td><?php echo $KODE_DOKTER; ?></td>
                                        <td><?php echo $NAMADOK; ?></td>
                                        <td><?php echo $ALAMATDOK; ?></td>
                                        <td><?php echo $TELEPONDOK; ?></td>
                                        <td><?php echo $NAMA_POLI; ?></td>
                                        <td><?php echo $HARI; ?>, <?php echo $JAM_MULAI;?> - <?php echo $JAM_SELESAI; ?></td>
                 </li>
                  </tr>
       
                </tbody>
 <?php  
$NO++;
}
?>                       
              </table>
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
