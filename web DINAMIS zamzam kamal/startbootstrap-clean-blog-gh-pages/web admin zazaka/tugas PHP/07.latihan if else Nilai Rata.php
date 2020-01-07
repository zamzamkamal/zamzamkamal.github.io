<!DOCTYPE html>
<html>
<head>
		<title>latihan if else</title>
</head>
<body>
		<p align="left" class="style3"><h3>NILAI</p></h3>
		<form actions="" method="post" name="input">
			<table>
				<tr>
			 		<td>Nama murid</td><td>:</td><td><input type="text" name="Nama"><br></td>
				</tr>
				<tr>
			  		<td>NIS</td><td>:</td><td><input type="text" name="NIS"><br></td>
            	</tr>
            	<tr>
					 <td>Jurusan</td><td>:</td><td><input type="text" name="Jurusan"><br></td>
				</tr>
				 <tr>
			 		<td>Nilai matematika</td><td>:</td><td><input type="text" name="Nmath"><br></td>
				</tr>
			 	<tr>
					<td>Nilai bahasa indo</td><td>:</td><td><input type="text" name="Nindo"><br></td>
				</tr>
			 	<tr>
			 		<td>Nilai bahasa inggris</td><td>:</td><td><input type="text" name="Ninggris"><br></td>
				</tr>
			 	<tr>
			 		<td>Nilai produktif</td><td>:</td><td><input type="text" name="Npro"><br></td>
				</tr>
			 	<tr>
			 	<td>Nilai minimum kelulusan</td><td>:</td><td><input type="text" name="Nmin"><br></td>
				</tr>
							
							<td></td><td></td><td><input type="submit" name="input" value="input"></table></td>											
			</table>
       	</form>


       <?php
       if (isset($_POST['input'])) {
       	$NAMA = $_POST['Nama'];
       	$NIS = $_POST['NIS'];
       	$JURUSAN = $_POST['Jurusan'];
       	$NILAIMATEMATIKA= $_POST['Nmath'];
       	$NILAIBAHASAINDO= $_POST['Nindo'];
       	$NILAIBAHASAINGGRIS = $_POST['Ninggris'];
       	$NILAIPRODUKTIF = $_POST['Npro'];
       	$NILAIMINIMUMKELULUSAN = $_POST['Nmin'];
       	$RATA=($NILAIMATEMATIKA+$NILAIBAHASAINDO+$NILAIBAHASAINGGRIS+$NILAIPRODUKTIF)/4;
       	if ($RATA>=$NILAIMINIMUMKELULUSAN) {
       		echo "siswa yang bernama <b>".$NAMA."</b> dengan nilai <b>".$RATA."</b> dan dengan nilai batas minimum kelulusan <b>".$NILAIMINIMUMKELULUSAN."</b> maka siswa tersebut <b> LULUS </b>";
       	}else
       	echo "siswa yang bernama <b>".$NAMA."</b> dengan nilai <b>".$RATA."</b> dan dengan nilai batas minimum kelulusan <b>".$NILAIMINIMUMKELULUSAN."</b> maka siswa tersebut <b>  TIDAK LULUS </b>";
        }
        

     ?>

   </body>
   </html>