<?php 



if (isset($_POST['input'])) {
	$NAMA=$_POST['nama'];
	$NIS=$_POST['nis'];
	$JUR=$_POST['jur'];
	$MTK=$_POST['mtk'];
	$INDO=$_POST['Indo'];
	$INGG=$_POST['Ingg'];
	$KKM=$_POST['kkm'];

	function predikat ($NILAI) {

	if($NILAI<=50){
	echo "Surs tod";
	}
	elseif ($NILAI<=65) {
	echo "kok kurang dude";
	}
	elseif ($NILAI<=75) {
	echo "lumayan lah";
	}
	elseif ($NILAI<=80) {
	echo "mantul dud";
	}
	else {
	echo "mantap jiwa";
	}

}
	function Kelulusan($NILAI1,$NILAI2,$NILAI3,$KKM)
	{
		if ($NILAI1>=$KKM && $NILAI2>=$KKM && $NILAI3>=$KKM) {
			echo "<b>LULUS</b>";
		}
		else {
			echo "<b>TIDAK LULUS</b>";
		}

}


//siswa <?php predikat ($MTK);
?>

<b>Siswa</b>
<table>
	<tr>
		<td></td><td>Nama</td><td>:</td><td><?php echo $NAMA; ?></td>
	</tr>
	<tr>
		<td></td><td>NIS</td><td>:</td><td><?php echo $NIS; ?></td>
	</tr>
	<tr>
		<td></td><td>Jurusan</td><td>:</td><td><?php echo $JUR; ?></td>
	</tr>
</table>
<b>Telah mengikuti ujian dengan nilai</b>
<table>
	<tr>
	<td></td><td>Matenatika</td><td>:</td><td><?php  echo $MTK; ; ?></td><td> <?php predikat ($MTK); ?></td>
	</tr>
	<tr>
	<td></td><td>B.Indonesia</td><td>:</td><td><?php echo $INDO;  ?></td><td> <?php predikat ($INDO); ?></td>
	</tr>
	<tr>
	<td></td><td>B.Inggris</td><td>:</td><td><?php  echo $INGG; ?></td><td> <?php predikat ($INGG); ?></td>
	</tr>
	<tr>
	<td></td><td>KKM</td><td>:</td><td><?php  echo $KKM; ?></td>
	</tr>
</table>
<b><?php Kelulusan ($MTK,$INDO,$INGG,$KKM); ?></b>
<?php
}
 ?>