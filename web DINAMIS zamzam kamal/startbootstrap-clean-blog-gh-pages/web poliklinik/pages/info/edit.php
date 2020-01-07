<?php
		$ID=isset($_GET['nip']) ? $_GET['nip'] :null;
		include("koneksi.php");
		$SQL = mysql_query("SELECT * FROM tb_pegawai WHERE nip='$ID'");
		$TAMPIL = mysql_fetch_array($SQL);
		$SQL1 = mysql_query("SELECT * FROM tb_login WHERE nip='$ID'");
		$TAMPIL1 = mysql_fetch_array($SQL1);
?>
<title>PERPUSTAKAAN</title>
<h2>FORM EDIT ANGGOTA</h2>
<div class="panel-body">
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>NIP</label>
				<input class="form-control" name="Nip" value="<?php echo $TAMPIL['nip']; ?>">
			</div>
			<div class="form-group">
				<label>Nama Pegawai</label>
				<input class="form-control" name="Nama" value="<?php echo $TAMPIL['nama_peg']; ?>">
			</div>
			<div class="form-group">
				<label>Alamat pegawai</label>
				<input class="form-control" name="Alamat" value="<?php echo $TAMPIL['alamat_peg']; ?>">
			</div>
			<div class="form-group">
				<label>Telp Pegawai</label>
				<input name="Telp" class="form-control" value="<?php echo $TAMPIL['telp_peg']; ?>">
			</div>
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="date" class="form-control" name="Tgl" value="<?php echo $TAMPIL['tgl_lahir_peg']; ?>">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input class="form-control" name="Jenis" value="<?php echo $TAMPIL['Jenis_kelamin_peg']; ?>">
			</div>
			<div class="form-group">
				<label>Bagian</label>
				<input class="form-control" name="Bagian" value="<?php echo $TAMPIL1['type_user']; ?>">
			</div>
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
		</form>		
	</div>
</div>
</div>
</div>

<?php
		$NIP = isset($_POST['Nip']) ? $_POST['Nip'] : null;
		$NAMA = isset($_POST['Nama']) ? $_POST['Nama'] : null;
		$ALAMAT = isset($_POST['Alamat']) ? $_POST['Alamat'] : null;
		$TELP = isset($_POST['Telp']) ? $_POST['Telp'] : null;
		$TGL = isset($_POST['Tgl']) ? $_POST['Tgl'] : null;
		$JENIS = isset($_POST['Jenis']) ? $_POST['Jenis'] : null;

	$SIMPAN= isset($_POST['Simpan']);

	include ("koneksi.php");
	if($SIMPAN){
			$SQL ="UPDATE tb_pegawai SET
			nip='$NIP',
			nama_peg='$NAMA',
			alamat_peg='$ALAMAT',
			telp_peg='$TELP',
			tgl_lahir_peg='$TGL',
			Jenis_kelamin_peg='$JENIS'
			WHERE nip ='$ID'";

		
		if(mysql_query($SQL)){
?>		<script type="text/javascript">
			alert (" edit data berhasil di lakukan");
			window.location.href="pegawai.php?page=pegawai";
			</script>
			<?php

		}
	}
	?>