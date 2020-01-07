<?php
@session_start();
include "../inc/koneksi.php";
if (@$_SESSION['username']) 
 {
  if (@!$_SESSION['type_user']    =="Dokter")     {header("location:../dokter/index.php");}
    else {
  if (@$_SESSION['type_user']     =="Kasir")     {header("location:../kasir/index.php");}
  elseif (@$_SESSION['type_user'] =="Admin")    {header("location:../admin/index.php");}
  elseif (@$_SESSION['type_user'] =="Pendaftar") {header("location:../pendaftar/index.php");}   
          }   
 }

else{
  header("location:../inc/login.php");
}

?>

<?php
include "../inc/informasi.php";
include ("../inc/kode.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="../image/klinik satuy parah.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

              <title>| <?php echo $DATA_INFO['nama_poliklinik']; ?> | </title>

  <!-- Custom fonts for this template-->
  <link href="../tampil/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../tampil/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../tampil/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#"><B>Dokter Poliklinik</a></B>


    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="fontawesome-free" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="button" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <a class="btn btn-success btn-rounded" href="#"><i class="fas fa-user-ninja">user</a></i>
    <a class="btn btn-secondary" href="#"><i class="fas fa-envelope fa-fw"></a></i>
    <a class="btn btn-primary" href="../inc/logout.php"><i class="fas fa-sign-out-alt">Logout</a></i>
    
  </nav>
    


  <div id="wrapper">
    

         <!-- Sidebar -->

 <ul class="sidebar navbar-nav">
  <?php
      @$page =$_GET['page']
  ?>
      <li <?php if ($page == "dashboard") {?> class="nav-item active" <?php } ?> ">
        <a class="nav-link" href="?pages=dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard Dokter</span>
        </a>
      </li>

      <li <?php if ($page == "resep") {?> class="nav-item active" <?php } ?> ">
        <a class="nav-link" href="?page=resep">
         <i class='fas fa-tablets'></i>
          <span>Data Resep</span></a>
      </li>

      <li <?php if ($page == "periksa") {?> class="nav-item active" <?php } ?> ">
        <a class="nav-link" href="?page=periksa">
          <i class='fas fa-user-nurse'></i>
          <span>Data Pemeriksa</span></a>
      </li>

      <li <?php if ($page == "medis") {?> class="nav-item active" <?php } ?> ">
        <a class="nav-link" href="?page=medis">
          <i class='fas fa-book-medical'></i>
          <span>Rekam Medis</span></a>
      </li>

        </a>
      </li>
    </ul>

  
      <!-- up -->
    <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->     
        
          <?php
            include "../inc/menu.php";
          ?>
        
      <!-- /.container-fluid -->
      <!-- /.up -->

      <!-- Sticky Footer -->
      </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

        <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
  <span><b>Copyright © <a href="http://instagram.com/zamzam_kamal">Zamzam Kamal</a> 2019</b></span>
          </div>
        </div>
      </footer>
    </div>
    <!-- /.content-wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="../tampil/vendor/jquery/jquery.min.js"></script>
  <script src="../tampil/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../tampil/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../tampil/vendor/chart.js/Chart.min.js"></script>
  <script src="../tampil/vendor/datatables/jquery.dataTables.js"></script>
  <script src="../tampil/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../tampil/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../tampil/js/demo/datatables-demo.js"></script>
  <script src="../tampil/js/demo/chart-area-demo.js"></script>

</body>

</html>
