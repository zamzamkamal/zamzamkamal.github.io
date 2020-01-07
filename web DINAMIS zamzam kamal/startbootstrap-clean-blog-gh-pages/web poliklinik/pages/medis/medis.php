<link rel="stylesheet" type="text/css" href="../../tampil/sb-admin.css" >
<!-- page start -->
      
            <section class="">
                  <header class="panel-heading">
                  </header>
                  <?php
            @$PAGE =$_GET['aksi'];
            switch(@$PAGE) {
                  case 'tambah':
                       include "tambah.php";
                       break;
                  case 'edit':
                       include "edit.php";
                       break;
                  case 'selengkapnya':
                       include "selengkapnya.php";
                       break;
                  case 'detail':
                       include "detail.php";
                       break;
                  case 'print':
                       include "laporan_pemeriksaan_detail.php";
                       break;
                  case 'detail_data':
                       include "detail_data.php";
                       break;
                  case 'hapus':
                       include "hapus.php";
                       break;
                  case 'hapus_biaya':
                       include "hapus_biaya.php";
                       break;
                  case 'hapus_obat':
                       include "hapus_obat.php";
                       break;
                  case 'hapus_resep':
                       include "hapus_resep.php";
                       break;
                  case 'proses_tambah':
                       include "proses_tambah.php";
                       break;
                  case 'konfirmasi':
                        include "konfirmasi.php";
                        break;  
                  default:
                       include "tampil.php";
                       break;
            }
                  ?>
            </section>
      </div>      
</div>