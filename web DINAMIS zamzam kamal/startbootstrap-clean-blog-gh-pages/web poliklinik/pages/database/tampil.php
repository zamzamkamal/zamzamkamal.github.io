<?php
// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "ict2_db_poliklinik";

// Koneksi dan memilih database di server
mysqli_connect($server,$username,$password,$database) or die("Koneksi gagal");
//mysqli_select_db($database) or die("Database tidak bisa dibuka");



?> 
<div id="content-wrapper">
<div class="container-fluid">
       <ol class="breadcrumb">
        <?php
        @$PAGE = $_GET['page'];
        ?>
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Database</li>
        </ol>
        <center><h3><b>| Database |</b></h3></center>

<div class="">
<div class="panel-body">
    <ol class="breadcrumb">
		<?php
		$file	  =	$database.'_'.date("DMY").'_'.time().'.sql';
		//membuat nama file
		?>
		<script>
			function pastikan(text){
					confirm('Apakah Anda yakin akan '+text+'?')
			}
		</script>
		<div>
			
				<div class="tabbable">
						<ul class="nav nav-tabs" id="myTab">
								<li class="active">
										<a data-toggle="tab" href="#backup">
												<i class="fa-cloud-download bigger-120"></i><h5>| Backup |</h5>
										</a>
								</li>
								<br>
								<li>
										<a data-toggle="tab" href="#restore">
												<i class="fa-cloud-upload bigger-120"></i><h5>| Restore |</h5>
										</a>
								</li>
						</ul>
						<div class="tab-content">
								<div id="backup" class="tab-pane fade in active jarak form-group">
										<form action="" method="post" name="postform" enctype="multipart/form-data" >
											<br>
												<p><strong>Backup</strong> semua data yang ada didalam database &quot;<strong><?= $database ?></strong>&quot;.</em></p>
												<div class="asd">
														<button id="loading-btn" type="submit" class="btn btn-success" name="backup" onClick="return pastikan('Backup Database')">Proses Backup</button>
												</div>
												<br>
										</form>
								</div>

								<div id="restore" class="tab-pane fade jarak form-group">
										<form action="" method="post" name="postform" enctype="multipart/form-data" >
											<br>
												<p><strong>Restore</strong> semua data yang ada didalam database &quot;<strong><?= $database ?></strong>&quot;.</em></p>
												<div class="asd">
														<label for="backup">File Backup Database (*.sql)</label>
														<input type="file" name="datafile" size="20" class="filestyle" data-buttonName="btn-primary"/>
														<br>
														<button type="submit" class="btn btn-primary" name="restore" onClick="return pastikan('Restore Database')" data-loading-text="Loading...">Proses Restore</button>
												</div>
												<br>
										</form>
								</div>
						</div>
				</div>
		</div><!-- /.col -->
		<?php
		//Download file backup ============================================
		if(isset($_GET['nama_file']))
		{
				$file = $back_dir.$_GET['nama_file'];

				if (file_exists($file))
				{
						header('Content-Description: File Transfer');
						header('Content-Type: application/octet-stream');
						header('Content-Disposition: attachment; filename='.basename($file));
						header('Content-Transfer-Encoding: binary');
						header('Expires: 0');
						header('Cache-Control: private');
						header('Pragma: private');
						header('Content-Length: ' . filesize($file));
						ob_clean();
						flush();
						readfile($file);
						exit;
				}
				else
				{
						echo "file {$_GET['nama_file']} sudah tidak ada.";
				}

		}

		//Backup database =================================================
		if(isset($_POST['backup']))
		{
				backup($file);

		echo '<div class="alert alert-success" role="alert">
<strong> Backup Database Telah Selesai !</strong><br> <a style="cursor:pointer" href="'.$file.'" target="_blank" title="Download">Download File Database Klik Disini</a> </div>';
						echo "<pre>";
						print_r($return);
						echo "</pre>";
				}
				else
				{
						unset($_POST['backup']);
				}
				//Restore database ================================================
				if(isset($_POST['restore']))
				{
						restore($_FILES['datafile']);

						// echo "<pre>";
						// print_r($lines);
						// echo "</pre>";
				}
				else
				{
						unset($_POST['restore']);
				}

		
		function restore($file) {
				global $rest_dir;
				$nama_file	= $file['name'];
				$ukrn_file	= $file['size'];
				$tmp_file	= $file['tmp_name'];
				if ($nama_file == "")
				{
						echo "<div class='alert alert-danger' role='alert'>
        <strong>Gagal Restore Data !</strong> Pastikan memilih file Backup Database (*.sql)
      </div>";
				}
				else
				{
						$alamatfile	= $rest_dir.$nama_file;
						$templine	= array();

						if (move_uploaded_file($tmp_file , $alamatfile))
						{
								$templine	= '';
								$lines		= file($alamatfile);
								foreach ($lines as $line)
								{
										if (substr($line, 0, 2) == '--' || $line == '')
												continue;

										$templine .= $line;

										if (substr(trim($line), -1, 1) == ';')
										{
												mysql_query($templine) or print('Query gagal \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');

												$templine = '';
										}
								}
								echo "<center><h3>Berhasil Restore Database, silahkan di cek</h3></center>";

						}else{
								echo "Proses upload gagal, kode error = " . $file['error'];
						}
				}
		}

		function backup($nama_file,$tables = '')
		{
				global $return, $tables, $back_dir, $database ;

				if($tables == '')
				{
						$tables = array();
						$result = @mysql_list_tables($database);
						while($row = @mysql_fetch_row($result))
						{
								$tables[] = $row[0];
						}
				}else{
						$tables = is_array($tables) ? $tables : explode(',',$tables);
				}

				$return	= '';

				foreach($tables as $table)
				{
						$result	 = @mysql_query('SELECT * FROM '.$table);
						$num_fields = @mysql_num_fields($result);

						//menyisipkan query drop table untuk nanti hapus table yang lama
						$return	.= "DROP TABLE IF EXISTS ".$table.";";
						$row2	 = @mysql_fetch_row(mysql_query('SHOW CREATE TABLE  '.$table));
						$return	.= "\n\n".$row2[1].";\n\n";

						for ($i = 0; $i < $num_fields; $i++)
						{
								while($row = @mysql_fetch_row($result))
								{
										$return.= 'INSERT INTO '.$table.' VALUES(';

										for($j=0; $j<$num_fields; $j++)
										{
												$row[$j] = @addslashes($row[$j]);
												$row[$j] = @ereg_replace("\n","\\n",$row[$j]);
												if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
												if ($j<($num_fields-1)) { $return.= ','; }
										}
										$return.= ");\n";
								}
						}
						$return.="\n\n\n";
				}

				$nama_file;

				$handle = fopen($back_dir.$nama_file,'w+');
				fwrite($handle, $return);
				fclose($handle);
		}


		
				?>
</div>
</div>
<!-- Plugin Table -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
</div>
</div>