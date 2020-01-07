<!DOCTYPE html>
<html>
<head>
  <title>latihan inout IF else</title>
</head>
<body>
  <p align="left" class="style3"><h3>NILAI</p></h3>
  <FORM ACTION="" METHOD="POST" NAME="input">
    <table>
      <tr>
          <td>Nama murid</td><td>:</td><td><input type="text" name="nama"><br></td>
        </tr>
        <tr>
          <td>Nilai murid</td><td>:</td><td><input type="text" name="nilai"><br></td>
        </tr>
        <tr>
          <td>Nilai minimum kelulusan</td><td>:</td><td><input type="text" name="minimum"><br></td>
        </tr>
        <td></td><td></td><td><input type="submit" name="input" value="input"></table></td>
      </table>
    </FORM>

	<?php
if (isset($_POST["input"])) {
	$NAMA = $_POST["nama"];
	$NILAI = $_POST["nilai"];
	$MIN = $_POST["minimum"];
	if ($NILAI>=$MIN) {		
echo "Siswa yang bernama <b>". $NAMA."</b> dengan nilai <b> ". $NILAI. " </b> dinyatakan <b> LULUS</b> ";
 } else 
 echo "Siswa yang bernama <b> ". $NAMA." </b> dengan nilai <b> ". $NILAI. " </b> dinyatakan <b> TIDAK LULUS </b> ";
}
?>
</body>
</html>