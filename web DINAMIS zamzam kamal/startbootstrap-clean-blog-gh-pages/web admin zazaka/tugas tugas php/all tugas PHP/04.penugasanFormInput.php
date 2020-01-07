<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Menghitung Keliling Lingkaran</p>
	<form action="" method="post" name="input">
		Nilai awal<input type="text" name="Nilai1"><br><br>
		mau ditambah berapa <input type="text" name="Nilai2"><br><br>
		<input type="submit" name="Input" value="input">		
	</form>

<?php
 if (isset($_POST['Input'])){
 	$x = $_POST['Nilai1'];
 	$PENAMBAH = $_POST['Nilai2'];

 	$x +=$PENAMBAH;
 	echo "Jika diketahui nilai awal <b>" .$x." </b> dan si tambah nilai ke-2 sebesar ".$PENAMBAH." maka hasilnya :<b>"
 	.number_format($x,2)."</b>";
 }
?>	

</body>
</html>