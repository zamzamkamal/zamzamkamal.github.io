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

    <a class="navbar-brand mr-1" href=""><b>Laporan Medis</a></b>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <a class="btn btn-success btn-rounded" href="">Print</a>
      </div>
    </form>
    <a class="btn btn-primary" href="../dokter/index.php?page=medis">Close</a>
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
                 <thead>
                     <tr>
                        <th>No</th>
                        <th>Kode Pemeriksa</th>   
                        <th>Kode Pasien</th>   
                        <th>Nama</th>   
                        <th>Alamat</th>    
                        <th>Rincian</th>
                        <th>Status</th>        
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

                    
                  </tr>
       
                </body>

 <?php  
$NO++;
}
?>                       
              </table>
            </div>
          </div>

 

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
