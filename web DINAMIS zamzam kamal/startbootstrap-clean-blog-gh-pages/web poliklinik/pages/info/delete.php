<?php

	$ID=isset($_GET['nip']) ? $_GET['nip'] : null;
	include("koneksi.php");

	mysql_query("DELETE from tb_pegawai where nip = '$ID'");
	?>

	<script type="text/javascript">
		alert (" hapus data berhasil di lakukan sekarang");
		window.location.href="pegawai.php?page=pegawai";


	</script>