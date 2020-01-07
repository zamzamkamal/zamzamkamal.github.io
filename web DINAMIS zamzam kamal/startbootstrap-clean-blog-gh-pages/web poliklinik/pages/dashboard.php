<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

</head>

<body id="page-top">
<?php

$QUERY = mysqli_query ($CONNECT,"SELECT * FROM tb_login WHERE username='".$_SESSION['username']."'");
while ($DATA=mysqli_fetch_array($QUERY))
$NIP   = $DATA['nip'];
{
  $QUERY2 = mysqli_query($CONNECT,"SELECT * FROM tb_pegawai WHERE tb_pegawai.nip='$NIP'");
  while ($DATA2=mysqli_fetch_array($QUERY2))

  if ($_SESSION['username']) {
  
  if ($_SESSION['type_user']== "Admin") {
    echo "
    <div class='alert alert-dark' role='alert'>
        <a href='#' class='alert-link'>Selamat Datang</a>
        <h3>$DATA2[nama_peg]</h3>
    </div>

<div class='row'>
          <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-primary o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
                  <i class='fas fa-stethoscope'></i>
                </div>
                <div class='mr-5'> 99999 Data pegawai  </div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=pegawai'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>

             <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-warning o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
             <i class='fas fa-book-medical'></i>
                </div>
                <div class='mr-5'> 99999 Data poliklinik</div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=poli'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>

           <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-success o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
                  <i class='fas fa-pills'></i>
                </div>
                <div class='mr-5'> 99999 Data obat</div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=obat'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>

         
          <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-primary o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
                <i class='fas fa-money-bill-wave'></i>
                </div>
                <div class='mr-5'> 99999 Jenis  biaya  </div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=biaya'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>
          
          <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-warning o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
            <i class='fas fa-user-md'></i>
                </div>
                <div class='mr-5'> 777 Data dokter</div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=dokter'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>

          <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-success o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
             <i class='fas fa-fw fa-table'></i>
                </div>
                <div class='mr-5'> 999 Data Jadwal</div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=jadwal'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>

          <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-primary o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
                <i class='fas fa-info-circle'></i>
                </div>
                <div class='mr-5'> Info Polinlinik  </div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=info'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>
        
        <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-success o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
             <i class='fas fa-database'></i>
                </div>
                <div class='mr-5'> Database</div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=database'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>

    ";
  }else if ($_SESSION['type_user']== "Dokter") {
    echo "
    <div class='alert alert-dark' role='alert'>
        <a href='#' class='alert-link'>Selamat Datang</a>
        <h3>$DATA2[nama_peg]</h3>
    </div>

      <div class ='row'>
      <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-primary o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
                  <i class='fas fa-tablets'></i>
                </div>
                <div class='mr-5'> 999 Data Resep  </div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=resep'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>

            <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-warning o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
                  <i class='fas fa-user-nurse'></i>
                </div>
                <div class='mr-5'> 111 Data pemeriksa</div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=periksa'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>

           <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-success o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
                  <i class='fas fa-book-medical'></i>
                </div>
                <div class='mr-5'> 791  Rekam medis </div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=medis'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>
       </div>   

    ";
  }else if ($_SESSION['type_user']== "Kasir") {
    echo "
    <div class='alert alert-dark' role='alert'>
        <a href='#' class='alert-link'>Selamat Datang</a>
        <h3>$DATA2[nama_peg]</h3>
    </div>

    <div class='row'> 
          <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-primary o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
                  <i class='far fa-money-bill-alt'></i>
                </div>
                <div class='mr-5'>Rincian biaya</div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='#'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>
      </div>

    ";
  }else if ($_SESSION['type_user']== "Pendaftar") {
    echo "
    <div class='alert alert-dark' role='alert'>
        <a href='#' class='alert-link'>Selamat Datang</a>
        <h3>$DATA2[nama_peg]</h3>
    </div>

    <div class='row'> 
        <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-primary o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
                  <i class='fas fa-user-injured'></i>
                </div>
                <div class='mr-5'>Pasien Baru</div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=pasien_tambah'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>

          <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-warning o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
                  <i class='fas fa-book-reader'></i>
                </div>
                <div class='mr-5'>Data Pasien</div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=pasien'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>

           <div class='col-xl-3 col-sm-6 mb-3'>
            <div class='card text-white bg-success o-hidden h-100'>
              <div class='card-body'>
                <div class='card-body-icon'>
                  <i class='fas fa-swatchbook'></i>
                </div>
                <div class='mr-5'>Data Pendaftar</div>
              </div>
              <a class='card-footer text-white clearfix small z-1' href='?page=pendaftar'>
                <span class='float-left'>View Details</span>
                <span class='float-right'>
                  <i class='fas fa-angle-right'></i>
                </span>
              </a>
            </div>
          </div>
        </div>
    ";
  }

}

}
?>
</body>

</html>
