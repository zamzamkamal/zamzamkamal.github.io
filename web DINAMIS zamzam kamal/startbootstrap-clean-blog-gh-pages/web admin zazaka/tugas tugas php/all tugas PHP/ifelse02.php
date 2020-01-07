<?php
			if (isset($_POST['Input'])) {
				$NAMA=$_POST['Nama'];
				$NIS=$_POST['Nis'];
				$JUR=$_POST['Jurusan'];
				$MATH=$_POST['NMath'];
				$INDO=$_POST['NInd'];
				$MIN=$_POST['Nmin'];
	//cari predikat
		if ($MATH<=50) {
			$PMATH="Surs";
		}elseif ($MATH<=65) {
			$PMATH="lumayan";
		}elseif ($MATH<=75) {
			$PMATH="madev";
		}elseif ($MATH<=85) {
			$PMATH="mantap jiwa";
		}else{
			$PMATH="Sangat mantul";
		}

		if ($INDO<=50) {
			$PINDO="Surs";
		}elseif ($INDO<=65) {
			$PINDO="lumayan";
		}elseif ($INDO<=75) {
			$PINDO="madev";
		}elseif ($INDO<=85) {
			$PINDO="mantap jiwa";
		}else{
			$PINDO="sangat mantul";
		}
	//mencari kelulusan
		if ($MATH>=$MIN && $INDO>=$MIN) {
			$STATUS="LULUS";
		}else{
			$STATUS="TIDAK LULUS";
		}
		}
		//munculkan pesan
?>
		<b>Siswa yang bernama:<b>
		<table>
			<tr>
				<td></td><td>Nama</td><td>:</td><td><?php echo $NAMA ?></td>
			</tr>
			<tr>
				<td></td><td>NIS</td><td>:</td><td><?php echo $NIS ?></td>
			</tr>
			<tr>
				<td></td><td>KEJURUSAN</td><td>:</td><td><?php echo $JUR ?></td>
			</tr>
		</table>
		<b> Telah mengikuti ujian dan mendapatkan nilai </b>
		<table>
			<tr>
				<td> Matematika </td><td>:</td><td><?php echo $MATH?><td><td><?php echo $PMATH ?></td>
			</tr>
			<tr>
				<td> B.Indonesia </td><td>:</td><td><?php echo $INDO?><td><td><?php echo $PINDO ?></td>
			</tr>
			<tr>
				<td>Sesuai dengan keriteria KKM sebesar <?php echo $MIN?>, maka siswa tersebut dinyatakan <?php echo $STATUS ?></td>
			</tr>
		</table>
		<?php  ?>