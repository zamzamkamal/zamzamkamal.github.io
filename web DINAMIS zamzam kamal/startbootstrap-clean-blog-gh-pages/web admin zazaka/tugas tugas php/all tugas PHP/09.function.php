<?php
function nama () {
			echo "hay my name ZAMZAM KAMAL<br>";
			echo "Ingin belajar function di php<br>";	
			echo "ini function tanpa variabel<br>";			
}
function nama2 ($nama,$kelas){
	echo "hallo my name :".$nama."<br>";
	echo "saya kelas :".$kelas."<br>";
}


nama ();

echo "<hr>";
$nama="Zamzam";
$kelas="XI RPL";

nama2 ($nama,$kelas)

?>