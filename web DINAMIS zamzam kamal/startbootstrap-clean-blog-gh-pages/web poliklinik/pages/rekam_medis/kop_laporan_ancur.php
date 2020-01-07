<div class="starter_template">
	<!-- <img width="120px;" src="../images/<?php echo @$data_info['logo_poliklinik']; ?>" style="position: relative; left: 30px;"> -->
<center>
    <h1 class="lap"><?php echo @$DATA_INFO['nama_poliklinik']; ?>
    </h1>
    <p class="lead_lap"><?php echo @$DATA_INFO['deskripsi_poliklinik']; ?></p>
    <i>
    	<p><?php echo @$DATA_INFO['alamat_poliklinik']; ?></p>
                    
    	<p>kec:<?php echo @$DATA_INFO['kec_poliklinik']; ?>,
     	kab:<?php echo @$DATA_INFO['kab_poliklinik']; ?>,
 		prov:<?php echo @$DATA_INFO['prov_poliklinik']; ?>,   
    	kode_pos :<?php echo @$DATA_INFO['kode_pos_poliklinik']; ?></p>
    </i>
        <p>Telp : <?php echo @$DATA_INFO['telp_poliklinik']; ?>,
        Email : <?php echo @$DATA_INFO['email_poliklinik']; ?></p>
</center>          
     <hr class="garis">
</div>