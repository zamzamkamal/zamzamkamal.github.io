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

    <a class="navbar-brand mr-1" href=""><b>Laporan Data Detail</a></b>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <a class="btn btn-success btn-rounded" href="">Print</a>
      </div>
    </form>
    <a class="btn btn-primary" href="../admin/index.php?page=obat">Close</a>
  </nav>

<div class="container">

  <div class="col-xs-12">
          <?php include @'kop_laporan.php' ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>

           <?php
$KODE=$_GET['id'];
$QUERY = mysqli_query($CONNECT,"SELECT tb_pemeriksaan.*,tb_pasien.*,tb_pendaftaran.* FROM tb_pendaftaran
INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran
INNER JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas WHERE tb_pemeriksaan.kode_pemeriksaan='$KODE'");
$ROW = @mysqli_fetch_array($QUERY)

?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="payslip-title">DETAIL PEMERIKSAAN</h4>
            <div class="row">
                <div class="col-sm-6 m-b-20">
                    <img src="../assets/img/logo-dark.png" class="inv-logo" alt="">
                    <ul class="list-unstyled mb-0">
                        <li><strong><?php echo $DATA_INFO['nama_poliklinik']; ?></strong></li>
                        <li><?php echo $DATA_INFO['alamat_poliklinik']; ?></li>
                        <li><?php echo $DATA_INFO['telp_poliklinik']; ?></li>
                    </ul>
                </div>
                <div class="col-sm-6 m-b-20">
                    <div class="invoice-details">
                        <h4 class="text-uppercase">Kode Pemeriksaan #<?php echo $ROW['kode_pemeriksaan']; ?></h4>
                        <ul class="list-unstyled">
                            <li>Tanggal Registrasi : <span><?php echo $ROW['tanggal_reg']; ?></span></li>
                            <li>Tanggal Pemeriksaan : <span><?php echo $ROW['tanggal_pemeriksaan']; ?></span></li>
                            <li>No. Pendaftaran : <span><?php echo $ROW['no_urut']; ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 m-b-20">
                    <ul class="list-unstyled">
                        <li>
                            <h5 class="mb-0"><strong><?php echo $ROW['nama_pas'].' ('. $ROW['tanggal_lahir_pas'].')'; ?></strong></h5></li>
                        <li><span><?php echo $ROW['kode_pas']; ?></span></li>
                        <li><?php echo $ROW['alamat_pas']; ?></li>
                        <li><?php echo $ROW['telp_pas']; ?></li>
                    </ul>
                </div>
                <div class="col-lg-6 m-b-20">
                    <ul class="personal-info">
                        <li>
                            <h5 class="mb-0"><strong>Data Pasien</strong></h5></li>
                        <li>
                            <span class="title">Berat Badan </span>
                            <span class="text">: <?php echo $ROW['berat_badan']; ?></span>
                        </li>
                        <li>
                            <span class="title">Tensi Diastolik </span>
                            <span class="text">: <?php echo $ROW['tensi_diastolik']; ?></span>
                        </li>
                        <li>
                            <span class="title">Tensi Sistolik </span>
                            <span class="text">: <?php echo $ROW['tensi_sistolik']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Keluhan</th>
                            <th>Diagnosa</th>
                            <th>Perawatan</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $ROW['keluhan']; ?></td>
                            <td><?php echo $ROW['diagnosa']; ?></td>
                            <td><?php echo $ROW['perawatan']; ?></td>
                            <td><?php echo $ROW['tindakan']; ?></td>

                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div><br>
<div class="box-body">
  <table id="example2" class="table table-bordered">
           <thead>                                    
<tr>
                                          <th>NO</th>
                                          <th>ID Biaya</th>
                                          <th>Kode Pemeriksaan Biaya</th>
                                          <th>Kode Jenis Biaya</th>
                                        </tr>
                                  </thead>
                                      <?php
                                        $QUERRY = mysqli_query($CONNECT,"SELECT * FROM tb_rekam_medis_biaya ORDER BY tb_rekam_medis_biaya.id_rekam_medis_biaya ASC");
                                        $NO=1;
                                        while ($DATA = mysqli_fetch_array($QUERRY)) {
                                      ?>                              
                                         <tr>
                                             <td><?php echo $NO;?></td>
                                             <td><?php echo $DATA['id_rekam_medis_biaya']; ?></td>
                                             <td><?php echo $DATA['kode_pemeriksaan']; ?></td>
                                             <td><?php echo $DATA['kode_jenis_biaya']; ?></td>
                                                
                                             
                                  
                                 </td>
                                </tr>
                        <?php  
                        $NO++;
                        }
                        ?>
  </table>
</div><br>
<div class="box-body">
            <table id="example2" class="table table-bordered">
                   <thead>
<tr>
                                            <th>NO</th>
                                            <th>ID Obat</th>
                                            <th>Kode Pemeriksaan Obat</th>
                                            <th>Kode Jenis Obat</th>  
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php
                                          $TAMPIL = "SELECT * FROM tb_rekam_medis_obat ORDER BY tb_rekam_medis_obat.id_rekam_medis_obat ASC ";
                                          $HASIL = mysqli_query($CONNECT,$TAMPIL);
                                          $NO=1;
                                          while ($ROW = mysqli_fetch_array($HASIL)) {
                                            $NO;
                                            $ID_BIAYA               =$ROW['id_rekam_medis_obat'];
                                            $KODE_PEMERIKSAAN       =$ROW['kode_pemeriksaan_obat'];
                                            $KODE_JENIS_BIAYA       =$ROW['kode_obat'];
                                    
                                        ?>

                                        <tr>

                                                <td><?php echo $NO;?></td>
                                                <td><?php echo $ID_BIAYA; ?></td>
                                                <td><?php echo $KODE_PEMERIKSAAN; ?></td>
                                                <td><?php echo $KODE_JENIS_BIAYA; ?></td>

                                  </td>

                
                                        </tr>      
                                  
                                      <?php  
                    $NO++;
                    }
                    ?>
              </table>
</div><br>
<div class="box-body">
              <table id="example2" class="table table-bordered">          
<thead>
<tr>
                                            <th>NO</th>
                                            <th>ID Resep</th>
                                            <th>Kode Pemeriksaan Resep</th>
                                            <th>Kode Jenis Resep</th>  
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php
                                          $TAMPIL = "SELECT * FROM tb_rekam_medis_resep ORDER BY tb_rekam_medis_resep.id_rekam_medis_resep ASC ";
                                          $HASIL = mysqli_query($CONNECT,$TAMPIL);
                                          $NO=1;
                                          while ($ROW = mysqli_fetch_array($HASIL)) {
                                            $NO;
                                            $ID_RESEP               =$ROW['id_rekam_medis_resep'];
                                            $KODE_PEMERIKSAAN_RESEP       =$ROW['kode_pemeriksaan_resep'];
                                            $KODE_JENIS_RESEP       =$ROW['kode_resep'];
                                    
                                        ?>

                                        <tr>

                                                <td><?php echo $NO;?></td>
                                                <td><?php echo $ID_RESEP; ?></td>
                                                <td><?php echo $KODE_PEMERIKSAAN_RESEP; ?></td>
                                                <td><?php echo $KODE_JENIS_RESEP; ?></td>

                                  </td>

                
                                        </tr>      
                                  
                                      <?php  
                    $NO++;
                    }
                    ?>
              </table>
</div>
<br>
<br>
<br>
<br>
