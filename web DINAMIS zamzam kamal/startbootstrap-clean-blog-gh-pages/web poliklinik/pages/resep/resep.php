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
            	     include "laporan_detail.php";
            	     break;
            	case 'hapus':
            	     include "hapus.php";
            	     break;
            	case 'proses_tambah':
            	     include "proses_tambah.php";
            	     break;
            	default:
            	     include "tampil.php";
            	     break;
            }
			?>
		</section>
	</div>	
</div>